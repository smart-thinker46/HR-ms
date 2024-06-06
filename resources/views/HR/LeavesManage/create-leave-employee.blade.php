@extends('layouts.master')
@section('content')
    <!-- Page-content -->
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Add Leave (Employee)</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Leaves Manage</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Add Leave (Employee)
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
                <div class="xl:col-span-9">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15 grow">Apply Leave</h6>
                            <form action="#!">
                                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-12">
                                    <div class="xl:col-span-6">
                                        <div>
                                            <label for="leaveType" class="inline-block mb-2 text-base font-medium">Leave Type</label>
                                            <select name="leave_type" class="form-input border-slate-200 focus:outline-none focus:border-custom-500" data-choices="" data-choices-search-false="" name="leaveType" id="leaveType">
                                                <option value="">Select Leave Type</option>
                                                <option value="Medical Leave">Medical Leave</option>
                                                <option value="Casual Leave">Casual Leave</option>
                                                <option value="Sick Leave">Sick Leave</option>
                                                <option value="Annual Leave">Annual Leave</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6">
                                        <div>
                                            <label for="remainingLeaves" class="inline-block mb-2 text-base font-medium">Remaining Leaves</label>
                                            <input type="text" name="remaining_leave" id="remainingLeaves" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="18" disabled="">
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6">
                                        <label for="fromInput" class="inline-block mb-2 text-base font-medium">From</label>
                                        <input type="text" name="date_from" id="fromInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y">
                                    </div>
                                    <div class="xl:col-span-6">
                                        <label for="toInput" class="inline-block mb-2 text-base font-medium">To</label>
                                        <input type="text" name="date_to" id="toInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y">
                                    </div>
                                    <div class="xl:col-span-6">
                                        <div>
                                            <label for="numberOfDayLeaves" class="inline-block mb-2 text-base font-medium">Number of Days</label>
                                            <input type="text" id="numberOfDayLeaves" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="01" disabled="">
                                        </div>
                                    </div>
                                    <div class="xl:col-span-6">
                                        <label for="leaveDayInput" class="inline-block mb-2 text-base font-medium">Leave Day</label>
                                        <select class="form-input border-slate-200 focus:outline-none focus:border-custom-500" data-choices="" data-choices-search-false="" name="leaveDayInput" id="leaveDayInput">
                                            <option value="">Select Leave Day</option>
                                            <option value="Full-Day Leave">Full-Day Leave</option>
                                            <option value="Half Day Morning Leave">Half Day Morning Leave</option>
                                            <option value="Half-Day Afternoon Leave">Half-Day Afternoon Leave</option>
                                            <option value="Public Holiday">Public Holiday</option>
                                            <option value="Off Schedule">Off Schedule</option>
                                        </select>
                                    </div>
                                    <div class="md:col-span-2 xl:col-span-12">
                                        <div>
                                            <label for="reasonInput" class="inline-block mb-2 text-base font-medium">Reason</label>
                                            <textarea class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="reasonInput" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-end gap-2 mt-4">
                                    <button type="reset" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Reset</button>
                                    <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Apply Leave</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="xl:col-span-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">Leave Information ({{ date('Y') }})</h6>
                            <div>
                                <table class="w-full mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent">Medical Leave</td>
                                            <th class="px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent">04</th>
                                        </tr>
                                        <tr>
                                            <td class="px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent">Casual Leave</td>
                                            <th class="px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent">08</th>
                                        </tr>
                                        <tr>
                                            <td class="px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent">Sick Leave</td>
                                            <th class="px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent">03</th>
                                        </tr>
                                        <tr>
                                            <td class="px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent">Annual Leave</td>
                                            <th class="px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent">12</th>
                                        </tr>
                                        <tr>
                                            <td class="px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent">Use Leave</td>
                                            <th class="px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent">09</th>
                                        </tr>
                                        <tr>
                                            <td class="px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent">Remaining Leave</td>
                                            <th class="px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent">18</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end grid-->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

@section('script')

@endsection
@endsection
