@extends('layouts.main')

@section('css')

@endsection

@section('title')
    Chỉnh sửa trải nghiệm
@endsection

@section('page_title')
    Chỉnh sửa trải nghiệm
@endsection

@section('content')
    <div ng-controller="EditExperience" ng-cloak>
        @include('admin.experience.form')
    </div>
@endsection

@section('script')
    @include('admin.experience.Experience')
    <script>
        app.controller('EditExperience', function ($scope, $http) {
            $scope.arrayInclude = arrayInclude;
            $scope.loading = {};

            $scope.form = new Experience(@json($object), {scope: $scope});
            $scope.submit = function () {
                $scope.loading.submit = true;
                let data = $scope.form.submit_data;
                $.ajax({
                    type: 'POST',
                    url: "/admin/experience/" + "{{ $object->id }}" + "/update",
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.success) {
                            toastr.success(response.message);
                            window.location.href = "{{ route('experience.index') }}";
                        } else {
                            toastr.warning(response.message);
                            $scope.errors = response.errors;
                        }
                    },
                    error: function (e) {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function () {
                        $scope.loading.submit = false;
                        $scope.$applyAsync();
                    }
                });
            }
        });
    </script>
@endsection
