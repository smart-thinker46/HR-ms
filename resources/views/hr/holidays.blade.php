@extends('layouts.master')
@section('content')
    <!-- Page-content -->
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Holidays</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">HR Management</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Holidays
                    </li>
                </ul>
            </div>
            <div class="card" id="ordersTable">
                <div class="card-body">
                    <div class="flex items-center gap-3 mb-4">
                        <h6 class="text-15 grow">Holidays 2024</h6>
                        <div class="shrink-0">
                            <a href="#!" data-modal-target="addHolidayModal" type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add Holiday</span></a>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <thead class="ltr:text-left rtl:text-right">
                                <tr>
                                    <th class="px-3.5 py-2.5 font-semibold border border-slate-200 dark:border-zink-500">#</th>
                                    <th class="px-3.5 py-2.5 font-semibold border border-slate-200 dark:border-zink-500">Day</th>
                                    <th class="px-3.5 py-2.5 font-semibold border border-slate-200 dark:border-zink-500">Date</th>
                                    <th class="px-3.5 py-2.5 font-semibold border border-slate-200 dark:border-zink-500">Holiday Name</th>
                                    <th class="px-3.5 py-2.5 font-semibold border border-slate-200 dark:border-zink-500">Type</th>
                                    <th class="px-3.5 py-2.5 font-semibold border border-slate-200 dark:border-zink-500">Action</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">1</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Monday</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">15 Jan</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Makara Sankranti</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Gazetted Holiday</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" data-modal-target="addHolidayModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">2</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Friday</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">26 Jan</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Republic Day</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Gazetted Holiday</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" data-modal-target="addHolidayModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">3</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Monday</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">25 Mar</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Holi</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Gazetted Holiday</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" data-modal-target="addHolidayModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">4</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Friday</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">29 Mar</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Good Friday</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Gazetted Holiday</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" data-modal-target="addHolidayModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">5</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Sunday</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">4 Aug</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Friendship Day</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Observance</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" data-modal-target="addHolidayModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">6</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Thursday</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">15 Aug</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Independence Day</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Gazetted Holiday</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" data-modal-target="addHolidayModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">7</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Sunday</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">15 Sep</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Onam</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Restricted Holiday</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" data-modal-target="addHolidayModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">8</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Thursday</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">31 Oct</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Halloween</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Observance</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" data-modal-target="addHolidayModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">9</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Wednesday</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">25 Dec</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Christmas</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Gazetted Holiday</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" data-modal-target="addHolidayModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">10</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Tuesday</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">31 Dec</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">New Year</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Observance</td>
                                    <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" data-modal-target="addHolidayModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex flex-col items-center mt-5 md:flex-row">
                        <div class="mb-4 grow md:mb-0">
                            <p class="text-slate-500 dark:text-zink-200">Showing <b>5</b> of <b>8</b> Results</p>
                        </div>
                        <ul class="flex flex-wrap items-center gap-2 shrink-0">
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i class="mr-1 size-4 rtl:rotate-180" data-lucide="chevron-left"></i> Prev</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">1</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto active">2</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">3</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">Next <i class="ml-1 size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <div id="addHolidayModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16">Add Holiday</h5>
                <button data-modal-close="addHolidayModal" class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="#!">
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            <label for="typeSelect" class="inline-block mb-2 text-base font-medium">Type</label>
                            <select class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" data-choices="" data-choices-search-false="" name="typeSelect" id="typeSelect">
                                <option value="Restricted Holiday">Restricted Holiday</option>
                                <option value="Gazetted Holiday">Gazetted Holiday</option>
                                <option value="Observance">Observance</option>
                                <option value="Season">Season</option>
                            </select>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="holidayInput" class="inline-block mb-2 text-base font-medium">Holiday Name</label>
                            <input type="text" id="holidayInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Holiday name">
                        </div>
                        <div class="xl:col-span-12">
                            <label for="holidayDateInput" class="inline-block mb-2 text-base font-medium">Date</label>
                            <input type="text" id="holidayDateInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y">
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addHolidayModal" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Cancel</button>
                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add Holiday</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end add holiday-->
    
    <div id="deleteModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                <div class="float-right">
                    <button data-modal-close="deleteModal" class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i data-lucide="x" class="w-5 h-5"></i></button>
                </div>
                <img src="data:image/png;base64,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" alt="" class="block h-12 mx-auto">
                <div class="mt-5 text-center">
                    <h5 class="mb-1">Are you sure?</h5>
                    <p class="text-slate-500 dark:text-zink-200">Are you certain you want to delete this record?</p>
                    <div class="flex justify-center gap-2 mt-6">
                        <button type="reset" data-modal-close="deleteModal" class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">Cancel</button>
                        <button type="submit" class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Yes, Delete It!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end delete modal-->

@section('script')
    
@endsection
@endsection
