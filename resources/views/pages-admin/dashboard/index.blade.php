@extends('theme.layout')
@section('tittle', 'Dashboard')
@section('content')
<script type="text/javascript">
  document.getElementById('dashboard').classList.add('active');
</script>
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Order</p>
                <h5 class="font-weight-bolder">
                  {{ $orderwhere->count() }}
                </h5>
                <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">Order Totals</span><br>
                  <strong><em>{{ $order->count() }}</em></strong>
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">News Today</p>
                <h5 class="font-weight-bolder">
                  {{ $articlewhere->count() }}
                </h5>
                <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">Articles Totals</span><br>
                  <strong><em>{{ $article->count() }}</em></strong>
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                <i class="fas fa-newspaper text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Message</p>
                <h5 class="font-weight-bolder">
                  {{ $messagewhere->count() }}
                </h5>
                <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">Message Totals</span><br>
                  <strong><em>{{ $message->count() }}</em></strong>
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                <i class="ni ni-archive-2 text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Subs</p>
                <h5 class="font-weight-bolder">
                  {{ $subscribewhere->count() }}
                </h5>
                <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">Subs Totals</span><br>
                  <strong><em>{{ $subscribe->count() }}</em></strong>
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                <i class="fas fa-envelope text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-lg-7 mb-lg-0 mb-4">
      <div class="card z-index-2 h-100">
        <div class="card-header pb-0 pt-3 bg-transparent">
          <h6 class="text-capitalize"> Order's overview</h6>
        </div>
        <div class="card-body p-3">
          <div class="chart">
            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-5">
      <div class="card card-carousel overflow-hidden h-100 p-0 bg-dark">
        <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
          <div class="carousel-inner border-radius-lg h-100">
            <div class="carousel-item h-100 active" style="background-image: url('{{asset('assets/images/logo_white-2.png') }}');
  background-size: cover;">
            </div>
            <div class="carousel-item h-100" style="background-image: url('{{asset('assets/images/landing-page/'.$profil->profile_picture) }}');
  background-size: cover;">
            </div>
          </div>
          <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <input type="hidden" value="{{ $orderjan }}" id="orderjan">
  <input type="hidden" value="{{ $orderfeb }}" id="orderfeb">
  <input type="hidden" value="{{ $ordermar }}" id="ordermar">
  <input type="hidden" value="{{ $orderapr }}" id="orderapr">
  <input type="hidden" value="{{ $ordermay }}" id="ordermay">
  <input type="hidden" value="{{ $orderjun }}" id="orderjun">
  <input type="hidden" value="{{ $orderjul }}" id="orderjul">
  <input type="hidden" value="{{ $orderaug }}" id="orderaug">
  <input type="hidden" value="{{ $ordersep }}" id="ordersep">
  <input type="hidden" value="{{ $orderoct }}" id="orderoct">
  <input type="hidden" value="{{ $ordernov }}" id="ordernov">
  <input type="hidden" value="{{ $orderdes }}" id="orderdes">
@endsection
@section('script')
<script type="text/javascript">
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    var orderjan = $('#orderjan').val();
    var orderfeb = $('#orderfeb').val();
    var ordermar = $('#ordermar').val();
    var orderapr = $('#orderapr').val();
    var ordermay = $('#ordermay').val();
    var orderjun = $('#orderjun').val();
    var orderjul = $('#orderjul').val();
    var orderaug = $('#orderaug').val();
    var ordersep = $('#ordersep').val();
    var orderoct = $('#orderoct').val();
    var ordernov = $('#ordernov').val();
    var orderdes = $('#orderdes').val();

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Orders",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [
            orderjan,
            orderfeb,
            ordermar,
            orderapr,
            ordermay,
            orderjun,
            orderjul,
            orderaug,
            ordersep,
            orderoct,
            ordernov,
            orderdes
          ],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
</script>
@endsection