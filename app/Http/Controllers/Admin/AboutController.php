<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\Admin\About as ThisModel;
use Illuminate\Support\Facades\Log;
use Validator;
use \stdClass;
use Response;
use Rap2hpoutre\FastExcel\FastExcel;
use PDF;
use App\Http\Controllers\Controller;
use \Carbon\Carbon;
use Illuminate\Validation\Rule;
use App\Helpers\FileHelper;
use DB;

class AboutController extends Controller
{
    protected $view = 'admin.abouts';
    protected $route = 'abouts';

    public function index()
    {
        return view($this->view.'.index');
    }

    public function edit(Request $request)
    {
        $object = ThisModel::getDataForEdit(1);

        return view($this->view.'.edit', compact('object'));
    }

    public function show(Request $request)
    {
        $object = ThisModel::findOrFail(1);
        if (!$object->canview()) return view('not_found');
        $object = ThisModel::getDataForShow(1);
        return view($this->view.'.show', compact('object'));
    }

    public function update(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'intro' => 'required',
                'service_title' => 'nullable',
                'service_description' => 'nullable',
                'experience_number' => 'nullable',
                'experience_text' => 'nullable',
                'phone_number' => 'required',
            ]
        );

        $json = new stdClass();

        if ($validate->fails()) {
            $json->success = false;
            $json->errors = $validate->errors();
            $json->message = "Thao tác thất bại!";
            return Response::json($json);
        }


        DB::beginTransaction();
        try {
            $object = ThisModel::findOrFail(1);

            $object->title = $request->title;
            $object->intro = $request->intro;
            $object->service_title = $request->service_title;
            $object->service_description = $request->service_description;
            $object->experience_number = $request->experience_number;
            $object->experience_text = $request->experience_text;
            $object->phone_number = $request->phone_number;

            $results = $request->input('results', []);
            $filtered = collect($results)
                ->filter(function ($item) {
                    return isset($item['title'])
                        && trim($item['title']) !== '' && trim($item['content']) !== '';
                })
                ->values()
                ->all();

            $object->results = $filtered;

            $object->save();

            if ($request->image) {
                if($object->image) {
                    FileHelper::deleteFileFromCloudflare($object->image, $object->id, ThisModel::class, 'image');
                }
                FileHelper::uploadFileToCloudflare($request->image, $object->id, ThisModel::class, 'image');
            }

            if($request->image_back) {
                if($object->image_back) {
                    FileHelper::deleteFileFromCloudflare($object->image_back, $object->id, ThisModel::class, 'image_back');
                }
                FileHelper::uploadFileToCloudflare($request->image_back, $object->id, ThisModel::class, 'image_back');
            }


            DB::commit();
            $json->success = true;
            $json->message = "Thao tác thành công!";
            return Response::json($json);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);
            throw new Exception($e);
        }
    }

    public function delete($id)
    {
        $object = ThisModel::findOrFail($id);
        if (!$object->canDelete()) {
            $message = array(
                "message" => "Không thể xóa!",
                "alert-type" => "warning"
            );
        } else {
            if($object->image) {
                FileHelper::deleteFileFromCloudflare($object->image, $object->id, ThisModel::class, 'image');
            }
            $object->delete();
            $message = array(
                "message" => "Thao tác thành công!",
                "alert-type" => "success"
            );
        }


        return redirect()->route($this->route.'.index')->with($message);
    }

    // Xuất Excel
    public function exportExcel() {
        return (new FastExcel(ThisModel::all()))->download('danh_sach_vat_tu.xlsx', function ($object) {
            return [
                'ID' => $object->id,
                'Tên' => $object->name,
                'Trạng thái' => $object->status == 0 ? 'Khóa' : 'Hoạt động',
            ];
        });
    }

    public function getData(Request $request, $id) {
        $json = new stdclass();
        $json->success = true;
        $json->data = ThisModel::getDataForEdit($id);
        return Response::json($json);
    }

}
