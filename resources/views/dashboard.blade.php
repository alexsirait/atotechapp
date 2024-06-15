@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<style>
    .dataTables_filter {
        display: none;
    }
</style>
<div class="wrappers">
  {{-- Main --}}
  <div class="wrapper_content">
    <div class="mb-4">
      <a href="{{ config('auth.sso_host') }}" style="text-decoration: none">
        </a>
    </div>
    <div class="me-1">
      {{-- Row 1 --}}
      <div class="row">
        <div class="col-3 d-flex flex-column gap-2 justify-content-center">
          <p class="mb-0 h2" id="filterDay">{{ date("l") }}</p>
          <p class="mb-0 h1 fw-bold" id="filterDate">{{ date("d F Y") }}</p>
          <div class="clock fw-bold" id="clock"></div>
        </div>
        <div class="col-9">
          <div class="row">
            {{-- Active --}}
            <div class="col-4">
              <div class="card border-0 rounded-3 shadow bg-active"  id="cardactive">
                <div class="card-body">
                  <div><img class="rounded-circle p-3 bg-blue300" src="{{ asset('icons/active-emp.svg') }}" alt=""></div>
                  <div class="px-2 py-1 fw-bold d-inline-block rounded-3 my-3 bg-blue100 text-blue500">Barang Active </div>
                  <div class="d-flex align-items-end gap-1 py-5 px-4" style="margin-bottom: 40px">
                    <p class="h1 fw-bold mb-0" id="filterActive">{{ count($ada) }}</p>
                    <p class="mb-0 ml-4 fw-bold h1" style="margin-left: 40px">   Qty Barang</p>
                  </div>
                </div>
              </div>
            </div>

            {{-- Ontime --}}
            <div class="col-4">
              <div class="card border-0 rounded-3 shadow bg-ontime" id="cardontime">
                <div class="card-body">
                  <div><img class="rounded-circle p-3 bg-green300" src="{{ asset('icons/ontime.svg') }}" alt=""></div>
                  <div class="px-2 py-1 fw-bold d-inline-block rounded-3 my-3 bg-green100 text-green500">Barang Habis</div>
                  <div class="d-flex align-items-end gap-1 py-5 px-4" style="margin-bottom: 40px">
                    <p class="h1 fw-bold mb-0" id="filterOntime">{{ count($habis) }}</p>
                    <p class="mb-0 ml-4 fw-bold h1" style="margin-left: 40px">   Qty Barang</p>
                  </div>
                </div>
              </div>
            </div>

            {{-- Late --}}
            <div class="col-4">
              <div class="card border-0 rounded-3 shadow bg-late"  id="cardlate">
                <div class="card-body">
                  <div class="d-flex align-items-end gap-1">
                    <div id="chartOpsi"></div>
                  </div>
                </div>
              </div>
            </div>

          {{-- Overbreak --}}
            {{-- <div class="col-3">
              <div class="card border-0 rounded-3 shadow bg-overbreak" id="cardoverbreak">
                <div class="card-body">
                  <div><img class="rounded-circle p-3 bg-yellow300" src="{{ asset('icons/overbreak.svg') }}" alt=""></div>
                  <div class="px-2 py-1 fw-bold d-inline-block rounded-3 my-3 bg-yellow200 text-yellow600">Overbreak</div>
                  <div class="d-flex align-items-end gap-1">
                    <p class="h2 fw-bold mb-0" id="filterOverbreak">4</p>
                    <p class="mb-0">Barang</p>
                  </div>
                </div>
              </div>
            </div> --}}

          </div>
        </div>
      </div>

      {{-- Row 2 --}}
      <div class="row mt-3">
              <div class="col-12">
                <div class="card border-0 rounded-3 shadow h-100">
                  <div class="card-body">
                    <p class="h5 fw-bold">Summary For Empty and Updated</p>
                    {{-- Tab and Filter Month --}}
                    <div class="d-flex justify-content-between align-items-center">
                    </div>

                    {{-- Content Late & Overbreak --}}
                    <div class="tab-content" id="myTabContent">
                      {{-- Late --}}
                      <div class="tab-pane fade show active mt-2" id="contentChartLate" role="tabpanel" aria-labelledby="tabChartLate" tabindex="0">
                        {{-- Ket Warna --}}
                        <div class="d-flex ms-5">
                          <div class="d-flex align-items-center gap-3">
                              <div class="d-flex align-items-center gap-2">
                                  <div style="width: 24px; height: 6px; border-radius: 2px; background-color: #CD202E;"></div>
                                  <p class="mb-0">Masuk</p>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                  <div style="width: 24px; height: 6px; border-radius: 2px; background-color: #FFB100;"></div>
                                  <p class="mb-0">Keluar</p>
                              </div>
                          </div>
                        </div>
                        {{-- Chart Bar Lateness --}}
                        <div style="height: 300px">
                          <div id="chart"></div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
      </div>

      {{-- Row 3 --}}
      <div class="row mt-3">

        {{-- Card Late --}}
        <div class="col-6">
          <div class="card border-0 rounded-3 shadow h-100">
            <div class="card-body">
              <p class="h5 fw-bold">Barang Empty</p>

              {{-- Table Late --}}
              <div class="tab-content" id="contentLateOver">
                <div class="tab-pane fade show active mt-2" id="contentLateness" role="tabpanel" aria-labelledby="tabLateness" tabindex="0">
                  <table id="tableLateness1" class="table table-responsive table-hover">
                    <thead>
                        <tr class="bg-red400">
                            <th class="rounded-start-3 text-white">No</th>
                            <th class="rounded-end-3 text-white">Nama</th>
                        </tr>
                    </thead>
                    <tbody id="tbodyLate">
                        @foreach($habis as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td><b>{{ $value->name }}</b></td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- Card Overbreak --}}
        <div class="col-6">
          <div class="card border-0 rounded-3 shadow h-100">
            <div class="card-body">
              <p class="h5 fw-bold">Barang Updated</p>

              {{-- Table Overbreak --}}
              <div class="tab-content" id="contentLateOver">
                <div class="tab-pane fade show active mt-2" id="contentOverbreak" role="tabpanel" aria-labelledby="tabLateness" tabindex="0">
                  <table id="tableOverbreak1" class="table table-responsive table-hover">
                    <thead>
                        <tr class="bg-red400">
                            <th class="rounded-start-3  text-white">No</th>
                            <th class=" text-white">Nama</th>
                            <th class="rounded-end-3 text-white"><center>Total</center></th>
                        </tr>
                    </thead>
                    <tbody id="tbodyOver">
                        @foreach($ada as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td><b>{{ $value->name }}</b></td>
                            <td><center>{{ $value->total }}</center></td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


@endsection

@section('script')
<script>
    let dataChart = @json($tanggal);

    let workareaArray = [];
    let totalPercentLateArray = [];
    let totalPercentOverBreakArray = [];

    dataChart.forEach(item => {
        workareaArray.push(item.month);
        totalPercentLateArray.push(item.total_keluar);
        totalPercentOverBreakArray.push(item.total_masuk);
    });

  var options = {
         series: [{
          name: 'Masuk',
          data: totalPercentLateArray
        }, {
          name: 'Keluar',
          data: totalPercentOverBreakArray
        }],
        chart: {
            height: 300,
            type: 'area',
            toolbar: {
              show: false
            },
            zoom:{
              enabled: false
            },
          stacked: false,
          stackType: '100%'
        },
        colors:['#CD202E', '#FFB100'],
        legend: {
          show: false
        },
        dataLabels: {
            enabled: true,
            formatter: function (val, opts) {
                return val + ' Data';
            }
        },
        stroke: {
          curve: 'smooth'
        },
        xaxis: {
            type: 'category',
            categories: workareaArray,
            labels: {
            formatter: function (val) {
                return val;
            }
            }
        },
        yaxis: {
            labels: {
            formatter: function (val) {
                return val + '%';
            }
            }
        },
        labels: workareaArray
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

  //datatable Lateness
  $(document).ready( function () {
      $('#tableLateness1').DataTable({
          searching: false,
          "ordering": true,
            "bSort": true,
            "aaSorting": [],
            pageLength: 5,
            "lengthChange": false,
            responsive: true,
            language: { search: "" },
      });
  });
  //datatable Overbreak
  $(document).ready( function () {
      $('#tableOverbreak1').DataTable({
        searching: false,
        "ordering": true,
        "bSort": true,
        "aaSorting": [],
        pageLength: 5,
        "lengthChange": false,
        responsive: true,
        language: { search: "" },
      });
  });
  $(document).ready(function () {
        $("#filterDashboard").flatpickr({
            dateFormat: "Y-m-d",
            defaultDate: [new Date()]
        });
    });

</script>
<script>
    const data = {
        "Masuk": @json($masuk)[0].masuk,
        "keluar": @json($keluar)[0].keluar
    };
    const sortedKeys = Object.keys(data).sort((a, b) => {
        const order = {
            "Masuk": 0,
            "keluar": 1,
        };
        return order[a] - order[b];
    });

    const newSeriesData = sortedKeys.map(key => data[key]);
    let optionsPie = {
        series: newSeriesData,
        chart: {
        width: 400,
        type: 'pie',
    },
    labels: ['Masuk', 'keluar'],
    markers: {
        shape: 'square',
        size: 8
    },
    legend: {
        position: 'right',
        horizontalAlign: 'center',
        itemMargin: {
            vertical: 4
        },
        markers: {
            width: 14,
            height: 14,
            radius: 0,
        },
    },
    responsive: [
        {
            breakpoint: 100,
            options: {
                chart: {
                width: 10
                },
                legend: {
                position: 'right'
                }
            }
        },
        {
            breakpoint: 50,
            options: {
                chart: {
                width: 10
                },
                legend: {
                position: 'bottom'
                }
            }
        }
    ]
    };

    let chartPie = new ApexCharts(document.querySelector("#chartOpsi"), optionsPie);
    chartPie.render();
</script>
<script>
  function updateClock() {
      var currentTime = new Date();
      var hours = currentTime.getHours();
      var minutes = currentTime.getMinutes();
      var seconds = currentTime.getSeconds();
      var milliseconds = currentTime.getMilliseconds();
      hours = (hours < 10 ? '0' : '') + hours;
      minutes = (minutes < 10 ? '0' : '') + minutes;
      seconds = (seconds < 10 ? '0' : '') + seconds;
      milliseconds = ('00' + milliseconds).slice(-3);
      var clockDisplay = hours + ':' + minutes + ':' + seconds + ':' + milliseconds;
      document.getElementById('clock').textContent = clockDisplay;
  }
  setInterval(updateClock, 1);
</script>
@endsection