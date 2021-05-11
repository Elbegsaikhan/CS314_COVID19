@extends('layouts.welcome')
@section('title', 'Dashboard')
<?php
// Array -ийг эрэмблэнэ.
if(isset($data)){
    $sortedData = $data['Countries'];
    function sortByOrder($a, $b) {
        if($a['TotalConfirmed']==$b['TotalConfirmed']) return 0;
        return $a['TotalConfirmed'] < $b['TotalConfirmed']?1:-1;
        //    return $a['TotalConfirmed'] - $b['TotalConfirmed'];
    }
    usort($sortedData, 'sortByOrder');
}
?>
@section('content')
    <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
        <div class="px-4 md:px-10 mx-auto w-full">
            <div>
                <!-- Card stats -->
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap">
                                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                        <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                            Нийт тохиолдол
                                        </h5>
                                        <span class="font-semibold text-xl text-blueGray-700">
                           {{ number_format($data['Global']['TotalConfirmed'])}}
                           </span>
                                    </div>
                                    <div class="relative w-auto pl-4 flex-initial">
                                        <div
                                            class="text-white p-1 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-500">
                                            <i class="fas fa-globe"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-gray-400 mr-2">
                        <i class="fas fa-plus"></i>
                        {{ number_format($data['Global']['NewConfirmed'])}}
                        </span>
                                    <span class="whitespace-nowrap">
                        Өнөөдөр
                        </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap">
                                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                        <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                            Эдгэрсэн
                                        </h5>
                                        <span class="font-semibold text-xl text-blueGray-700">
                           {{number_format($data['Global']['TotalRecovered'])}}
                           </span>
                                    </div>
                                    <div class="relative w-auto pl-4 flex-initial">
                                        <div
                                            class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-green-500">
                                            <i class="fas fa-virus-slash"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-green-500 mr-2">
                        <i class="fas fa-plus"></i>{{ number_format($data['Global']['NewRecovered'])}}
                        </span>
                                    <span class="whitespace-nowrap">
                        Өнөөдөр
                        </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap">
                                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                        <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                            Нас барсан
                                        </h5>
                                        <span class="font-semibold text-xl text-blueGray-700">
                           {{ number_format($data['Global']['TotalDeaths'])}}
                           </span>
                                    </div>
                                    <div class="relative w-auto pl-4 flex-initial">
                                        <div
                                            class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-400">
                                            <i class="fas fa-skull-crossbones"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-red-500 mr-2">
                        <i class="fas fa-plus"></i> {{ number_format($data['Global']['NewDeaths'])}}
                        </span>
                                    <span class="whitespace-nowrap">
                        Өнөөдөр
                        </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap">
                                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                        <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                            Вакцинжуулсан
                                        </h5>
                                        <span class="font-semibold text-xl text-blueGray-700">
                           49,65%
                           </span>
                                    </div>
                                    <div class="relative w-auto pl-4 flex-initial">
                                        <div
                                            class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                                            <i class="far fa-thumbs-up"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-emerald-500 mr-2">
                        <i class="fas fa-arrow-up"></i> 12%
                        </span>
                                    <span class="whitespace-nowrap">
                        Since last month
                        </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    Graphic--}}
    <div class="px-4 md:px-10 mx-auto w-full -m-24">
        <div class="flex flex-wrap mt-4">
            <div class="w-full xl:11/12 mb-12 xl:mb-0 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                <h3 class="font-semibold text-base text-blueGray-700">
                                    Countries
                                </h3>
                            </div>
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                                <label for="maxRows">Мөрийн тоо</label>
                                <select class="appearance-none text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1" name="state" id="maxRows">
                                    <option value="5000">Бүгдийг сонгох</option>
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15" >15</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="70">70</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="block w-full overflow-x-auto    ">
                        <!-- Projects table -->
                        <table class="items-center w-full bg-transparent border-collapse" id="table-id">
                            <thead>
                            <tr>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Улс
                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Нийт тохиолдол
                                </th>

                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Нас барсан
                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Эмчлэгдсэн
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($sortedData as $d)
                                <tr>
                                    <th
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                         <a href="{{ $d['Slug'] }}"> <span class="flag-icon flag-icon-{{ strtolower($d['CountryCode'])}} flag-icon-squared p-2"></span> {{ $d['Country'] }} </a>
                                    </th>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{ number_format($d['TotalConfirmed']) }}
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{ number_format($d['TotalDeaths']) }}
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                                        {{ number_format($d['TotalRecovered']) }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class='pagination-container  bg-white flex items-center justify-center border-t border-gray-200 sm:px-6 px-4 py-4 ' >
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
                            <ul class="pagination flex flex-nowrap cursor-pointer">
                                <li data-page="prev " >
                                    <span class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50"> < <span class="sr-only ">(current)</span></span>
                                </li>
                                <li data-page="next" id="prev">
                                    <span class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50"> > <span class="sr-only ">(current)</span></span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <footer class="block py-4 mt-6">--}}
{{--        <div class="container mx-auto px-4">--}}
{{--            <hr class="mb-4 border-b-1 border-blueGray-200" />--}}
{{--            <div class="flex flex-wrap items-center md:justify-between justify-center">--}}
{{--                <div class="w-full md:w-4/12 px-4">--}}
{{--                    <div class="text-sm text-blueGray-500 font-semibold py-1">--}}
{{--                        Copyright © <span id="javascript-date"></span>--}}
{{--                        <a href="https://www.creative-tim.com"--}}
{{--                           class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1">--}}
{{--                            Creative Tim--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="w-full md:w-8/12 px-4">--}}
{{--                    <ul class="flex flex-wrap list-none md:justify-end  justify-center">--}}
{{--                        <li>--}}
{{--                            <a href="https://www.creative-tim.com"--}}
{{--                               class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">--}}
{{--                                Creative Tim--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="https://www.creative-tim.com/presentation"--}}
{{--                               class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">--}}
{{--                                About Us--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://blog.creative-tim.com"--}}
{{--                               class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">--}}
{{--                                Blog--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="https://github.com/creativetimofficial/tailwind-starter-kit/blob/main/LICENSE.md"--}}
{{--                               class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">--}}
{{--                                MIT License--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </footer>--}}

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        getPagination('#table-id');
        //getPagination('.table-class');
        //getPagination('table');

        /*					PAGINATION
        - on change max rows select options fade out all rows gt option value mx = 5
        - append pagination list as per numbers of rows / max rows option (20row/5= 4pages )
        - each pagination li on click -> fade out all tr gt max rows * li num and (5*pagenum 2 = 10 rows)
        - fade out all tr lt max rows * li num - max rows ((5*pagenum 2 = 10) - 5)
        - fade in all tr between (maxRows*PageNum) and (maxRows*pageNum)- MaxRows
        */


        function getPagination(table) {
            var lastPage = 1;

            $('#maxRows')
                .on('change', function(evt) {
                    //$('.paginationprev').html('');						// reset pagination

                    lastPage = 1;
                    $('.pagination')
                        .find('li')
                        .slice(1, -1)
                        .remove();
                    var trnum = 0; // reset tr counter
                    var maxRows = parseInt($(this).val()); // get Max Rows from select option

                    if (maxRows == 5000) {
                        $('.pagination').hide();
                    } else {
                        $('.pagination').show();
                    }

                    var totalRows = $(table + ' tbody tr').length; // numbers of rows
                    $(table + ' tr:gt(0)').each(function() {
                        // each TR in  table and not the header
                        trnum++; // Start Counter
                        if (trnum > maxRows) {
                            // if tr number gt maxRows

                            $(this).hide(); // fade it out
                        }
                        if (trnum <= maxRows) {
                            $(this).show();
                        } // else fade in Important in case if it ..
                    }); //  was fade out to fade it in
                    if (totalRows > maxRows) {
                        // if tr total rows gt max rows option
                        var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
                        //	numbers of pages
                        for (var i = 1; i <= pagenum; ) {
                            // for each page append pagination li
                            $('.pagination #prev')
                                .before(
                                    '<li data-page="' +
                                    i +
                                    '">\
                                                      <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">' +
                                    i++ +
                                    '<span class="sr-only">(current)</span></span>\
                                                    </li>'
                                )
                                .show();
                        } // end for i
                    } // end if row count > max rows
                    $('.pagination [data-page="1"]').addClass('active'); // add active class to the first li
                    $('.pagination li').on('click', function(evt) {
                        // on click each page
                        evt.stopImmediatePropagation();
                        evt.preventDefault();
                        var pageNum = $(this).attr('data-page'); // get it's number

                        var maxRows = parseInt($('#maxRows').val()); // get Max Rows from select option

                        if (pageNum == 'prev') {
                            if (lastPage == 1) {
                                return;
                            }
                            pageNum = --lastPage;
                        }
                        if (pageNum == 'next') {
                            if (lastPage == $('.pagination li').length - 2) {
                                return;
                            }
                            pageNum = ++lastPage;
                        }

                        lastPage = pageNum;
                        var trIndex = 0; // reset tr counter
                        $('.pagination li').removeClass('active'); // remove active class from all li
                        $('.pagination [data-page="' + lastPage + '"]').addClass('active'); // add active class to the clicked
                        // $(this).addClass('active');					// add active class to the clicked
                        limitPagging();
                        $(table + ' tr:gt(0)').each(function() {
                            // each tr in table not the header
                            trIndex++; // tr index counter
                            // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                            if (
                                trIndex > maxRows * pageNum ||
                                trIndex <= maxRows * pageNum - maxRows
                            ) {
                                $(this).hide();
                            } else {
                                $(this).show();
                            } //else fade in
                        }); // end of for each tr in table
                    }); // end of on click pagination list
                    limitPagging();
                })
                .val(15)
                .change();

            // end of on select change

            // END OF PAGINATION
        }

        function limitPagging(){
            // alert($('.pagination li').length)

            if($('.pagination li').length > 7 ){
                if( $('.pagination li.active').attr('data-page') <= 3 ){
                    $('.pagination li:gt(5)').hide();
                    $('.pagination li:lt(5)').show();
                    $('.pagination [data-page="next"]').show();
                }if ($('.pagination li.active').attr('data-page') > 3){
                    $('.pagination li:gt(0)').hide();
                    $('.pagination [data-page="next"]').show();
                    for( let i = ( parseInt($('.pagination li.active').attr('data-page'))  -2 )  ; i <= ( parseInt($('.pagination li.active').attr('data-page'))  + 2 ) ; i++ ){
                        $('.pagination [data-page="'+i+'"]').show();

                    }

                }
            }
        }

        $(function() {
            // Just to append id number for each row
            $('table tr:eq(0)').prepend('<th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"> № </th>');

            var id = 0;

            $('table tr:gt(0)').each(function() {
                id++;
                $(this).prepend('<td class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">' + id + '</td>');
            });
        });

        //asdasdasd
        /* Sidebar - Side navigation menu on mobile/responsive mode */
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("bg-white");
            document.getElementById(collapseID).classList.toggle("m-2");
            document.getElementById(collapseID).classList.toggle("py-3");
            document.getElementById(collapseID).classList.toggle("px-6");
        }
        /* Function for dropdowns */
        function openDropdown(event, dropdownID) {
            let element = event.target;
            while (element.nodeName !== "A") {
                element = element.parentNode;
            }
            var popper = Popper.createPopper(element, document.getElementById(dropdownID), {
                placement: "bottom-end"
            });
            document.getElementById(dropdownID).classList.toggle("hidden");
            document.getElementById(dropdownID).classList.toggle("block");
        }

        // Chart+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++__________________________________________
        (function () {
            /* Add current date to the footer */
            document.getElementById("javascript-date").innerHTML = new Date().getFullYear();
            /* Chart initialisations */
            /* Line Chart */
            // var config = {
            //     type: "line",
            //     data: {
            //         labels: [
            //             "1","2","3","4","5","6","7","8"
            //         ],
            //         datasets: [
            //             {
            //                 label: new Date().getFullYear(),
            //                 backgroundColor: "#4c51bf",
            //                 borderColor: "#4c51bf",
            //                 data: [65, 78, 66, 44, 56, 67, 75],
            //                 fill: false
            //             },
            //             {
            //                 label: new Date().getFullYear() - 1,
            //                 fill: false,
            //                 backgroundColor: "#ed64a6",
            //                 borderColor: "#ed64a6",
            //                 data: [40, 68, 86, 74, 56, 60, 87]
            //             }
            //         ]
            //     },
            //     options: {
            //         maintainAspectRatio: false,
            //         responsive: true,
            //         title: {
            //             display: false,
            //             text: "Sales Charts",
            //             fontColor: "white"
            //         },
            //         legend: {
            //             labels: {
            //                 fontColor: "white"
            //             },
            //             align: "end",
            //             position: "bottom"
            //         },
            //         tooltips: {
            //             mode: "index",
            //             intersect: false
            //         },
            //         hover: {
            //             mode: "nearest",
            //             intersect: true
            //         },
            //         scales: {
            //             xAxes: [
            //                 {
            //                     ticks: {
            //                         fontColor: "rgba(255,255,255,.7)"
            //                     },
            //                     display: true,
            //                     scaleLabel: {
            //                         display: false,
            //                         labelString: "Month",
            //                         fontColor: "white"
            //                     },
            //                     gridLines: {
            //                         display: false,
            //                         borderDash: [2],
            //                         borderDashOffset: [2],
            //                         color: "rgba(33, 37, 41, 0.3)",
            //                         zeroLineColor: "rgba(0, 0, 0, 0)",
            //                         zeroLineBorderDash: [2],
            //                         zeroLineBorderDashOffset: [2]
            //                     }
            //                 }
            //             ],
            //             yAxes: [
            //                 {
            //                     ticks: {
            //                         fontColor: "rgba(255,255,255,.7)"
            //                     },
            //                     display: true,
            //                     scaleLabel: {
            //                         display: false,
            //                         labelString: "Value",
            //                         fontColor: "white"
            //                     },
            //                     gridLines: {
            //                         borderDash: [3],
            //                         borderDashOffset: [3],
            //                         drawBorder: false,
            //                         color: "rgba(255, 255, 255, 0.15)",
            //                         zeroLineColor: "rgba(33, 37, 41, 0)",
            //                         zeroLineBorderDash: [2],
            //                         zeroLineBorderDashOffset: [2]
            //                     }
            //                 }
            //             ]
            //         }
            //     }
            // };
            var ctx = document.getElementById("line-chart").getContext("2d");
            window.myLine = new Chart(ctx, config);

            // /* Bar Chart */
            // config = {
            //     type: "bar",
            //     data: {
            //         labels: [
            //             "January",
            //             "February",
            //             "March",
            //             "April",
            //             "May",
            //             "June",
            //             "July"
            //         ],
            //         datasets: [
            //             {
            //                 label: new Date().getFullYear(),
            //                 backgroundColor: "#ed64a6",
            //                 borderColor: "#ed64a6",
            //                 data: [30, 78, 56, 34, 100, 45, 13],
            //                 fill: false,
            //                 barThickness: 8
            //             },
            //             {
            //                 label: new Date().getFullYear() - 1,
            //                 fill: false,
            //                 backgroundColor: "#4c51bf",
            //                 borderColor: "#4c51bf",
            //                 data: [27, 68, 86, 74, 10, 4, 87],
            //                 barThickness: 8
            //             }
            //         ]
            //     },
            //     options: {
            //         maintainAspectRatio: false,
            //         responsive: true,
            //         title: {
            //             display: false,
            //             text: "Orders Chart"
            //         },
            //         tooltips: {
            //             mode: "index",
            //             intersect: false
            //         },
            //         hover: {
            //             mode: "nearest",
            //             intersect: true
            //         },
            //         legend: {
            //             labels: {
            //                 fontColor: "rgba(0,0,0,.4)"
            //             },
            //             align: "end",
            //             position: "bottom"
            //         },
            //         scales: {
            //             xAxes: [
            //                 {
            //                     display: false,
            //                     scaleLabel: {
            //                         display: true,
            //                         labelString: "Month"
            //                     },
            //                     gridLines: {
            //                         borderDash: [2],
            //                         borderDashOffset: [2],
            //                         color: "rgba(33, 37, 41, 0.3)",
            //                         zeroLineColor: "rgba(33, 37, 41, 0.3)",
            //                         zeroLineBorderDash: [2],
            //                         zeroLineBorderDashOffset: [2]
            //                     }
            //                 }
            //             ],
            //             yAxes: [
            //                 {
            //                     display: true,
            //                     scaleLabel: {
            //                         display: false,
            //                         labelString: "Value"
            //                     },
            //                     gridLines: {
            //                         borderDash: [2],
            //                         drawBorder: false,
            //                         borderDashOffset: [2],
            //                         color: "rgba(33, 37, 41, 0.2)",
            //                         zeroLineColor: "rgba(33, 37, 41, 0.15)",
            //                         zeroLineBorderDash: [2],
            //                         zeroLineBorderDashOffset: [2]
            //                     }
            //                 }
            //             ]
            //         }
            //     }
            // };
            // ctx = document.getElementById("bar-chart").getContext("2d");
            window.myBar = new Chart(ctx, config);
        })();
    </script>
@endsection
