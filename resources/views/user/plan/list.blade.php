@extends('user.layouts.app')
@push('title')
    {{ __(@$pageTitle) }}
@endpush
@section('content')
    <input type="hidden" id="plan-list-route" value="{{route('user.plan.list', $productInfo->id)}}">
    <div class="px-24 pb-24 position-relative">
        <!-- Info & Add product button -->
        <div class="d-flex justify-content-between align-items-center g-10 flex-wrap pb-20">
            <!-- Left -->
            <div class="">
                <h4 class="fs-24 fw-500 lh-24 text-white"></h4>
            </div>
            <!-- Right -->
        </div>
        <!-- Table -->
        <div class="p-20 bd-one bd-c-stroke-color bd-ra-12 bg-white overflow-hidden">
            <table class="table zTable zTable-last-item-right" id="planDetailsTable">
                <thead>
                <tr>
                    <th scope="col"><div class="min-sm-w-100 min-w-200">{{__("Plan Name")}}</div></th>
                    <th scope="col"><div class="min-sm-w-100 min-w-200">{{__("Plan Code")}}</div></th>
                    <th scope="col"><div class="min-sm-w-100 min-w-200">{{__("Price")}}</div></th>
                    <th scope="col"><div class="min-sm-w-100 min-w-200">{{__("Billing Cycle")}}</div></th>
                    <th scope="col"><div class="min-sm-w-100 min-w-200">{{__("Plan Status")}}</div></th>
                    <th scope="col"><div>{{__("Action")}}</div></th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

    <!-- edit Plan modal -->
    <div class="modal fade" id="editPlanModal" tabindex="-1" aria-labelledby="addPlanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bd-c-stroke-color bd-ra-12 py-25 px-20">

            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('user/custom/js/plan.js') }}"></script>
    <script src="{{ asset('user/custom/js/common.js') }}"></script>
@endpush
