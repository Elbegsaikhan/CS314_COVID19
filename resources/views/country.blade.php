@extends('layouts.welcome')
<?php
    $d = end($data);
?>
@section('title', 'Dashboard')

@section('content')

    <div class="relative bg-blue-500 md:pt-32 pb-32 pt-12">
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
                               {{ number_format($d['Confirmed'])}}
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
{{--                            <i class="fas fa-plus"></i>--}}

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
                               {{number_format($d['Recovered'])}}
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
{{--                            <i class="fas fa-plus"></i>{{ number_format($data['Global']['NewRecovered'])}}--}}
                            </span>
                                    <span class="whitespace-nowrap">
{{--                            Өнөөдөр--}}
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
                               {{ number_format($d['Deaths'])}}
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
{{--                            <i class="fas fa-plus"></i> {{ number_format($data['Global']['NewDeaths'])}}--}}
                            </span>
                                    <span class="whitespace-nowrap">
{{--                            Өнөөдөр--}}
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
                                            Идэвхтэй
                                        </h5>
                                        <span class="font-semibold text-xl text-blueGray-700">
                                        {{ number_format($d['Active']) }}
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
{{--                            <i class="fas fa-arrow-up"></i> --}}
                            </span>
                                    <span class="whitespace-nowrap">
{{--                            Since last month--}}
                            </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    // Chart--}}
    <div class="px-4 md:px-10 mx-auto w-full -m-24 mb-10 ">
            <div class="flex flex-wrap">
                <div class="w-full xl:w-full mb-12 xl:mb-0 px-4">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-blueGray-800">
                        <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                            <div class="flex flex-wrap items-center">
                                <div class="relative w-full max-w-full flex-grow flex-1">
{{--                                    <h6 class="uppercase text-blueGray-100 mb-1 text-xs font-semibold">--}}
{{--                                        Сүүлийн 10 өдрийн нийт тохиолдол--}}
{{--                                    </h6>--}}
{{--                                        <form action="form" method="post">--}}
{{--                                            <select class="appearance-none text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1" name="state" id="maxRows">--}}
{{--                                                @foreach($sortedData as $d)--}}
{{--                                                    <option value="">{{ $d['Country'] }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}

{{--                                        </form>--}}
                                </div>
                            </div>
                        </div>
                        <div class="p-4 flex-auto justify-center">
                            <!-- Chart -->
                            <div class="relative" >
                                @if(isset($chart))
                                    {!! $chart->render() !!}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
{{--    Table --}}
    <div class="flex flex-wrap mt-4 ">
        <div class="w-full xl:11/12 mb-12 xl:mb-0 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
{{--                            <h3 class="font-semibold text-base text-blueGray-700">--}}
{{--                                Countries--}}
{{--                            </h3>--}}
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
                                Confirmed
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Deaths
                            </th>

                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Recovered
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Active
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Date
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($countryTable as $cData)
                            <tr>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    {{ number_format($cData['Confirmed']) }}
                                </th>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{ number_format($cData['Deaths']) }}
                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{ number_format($cData['Recovered']) }}
                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">

                                    {{ number_format($cData['Active']) }}
                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{ $cData['Date'] }}
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
    </script>
@endsection
