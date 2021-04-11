@extends('layout.mainlayout')

@section('title','BMS - Dev.')

@section('content')
    <div id="content" class="main-content">
      <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-table-two">
              <div class="widget-heading">
                <h5 class="font-weight-bold align-left">LOGs</h5>
              </div>
              <div class="widget-content">
                <div class="table-responsive">
                  <table class="table table-bordered" style="text-align: center;">
                    <thead>
                      <tr>
                        <th scope="col" class="align-middle">id</th>
                        <th scope="col" class="align-middle">Vc1</th>
                        <th scope="col" class="align-middle">Vc2</th>
                        <th scope="col" class="align-middle">Vc3</th>
                        <th scope="col" class="align-middle">Vc4</th>
                        <th scope="col" class="align-middle">Vc5</th>
                        <th scope="col" class="align-middle">Vc6</th>
                        <th scope="col" class="align-middle">Vc7</th>
                        <th scope="col" class="align-middle">Vc8</th>
                        <th scope="col" class="align-middle">Vc9</th>
                        <th scope="col" class="align-middle">Vc10</th>
                        <th scope="col" class="align-middle">Vc11</th>
                        <th scope="col" class="align-middle">Vc12</th>
                        <th scope="col" class="align-middle">Vc13</th>
                        <th scope="col" class="align-middle">Vc14</th>
                        <th scope="col" class="align-middle">Vc15</th>
                        <th scope="col" class="align-middle">Current</th>
                        <th scope="col" class="align-middle">Temperature</th>
                        <th scope="col" class="align-middle">Total Cell Voltage</th>
                        <th scope="col" class="align-middle">Timestamp</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $id=>$row)
                      <tr>
                        <td class="align-middle">{{$id + 1}}</td>
                        <td class="align-middle">{{$row->vc1}}</td>
                        <td class="align-middle">{{$row->vc2}}</td>
                        <td class="align-middle">{{$row->vc3}}</td>
                        <td class="align-middle">{{$row->vc4}}</td>
                        <td class="align-middle">{{$row->vc5}}</td>
                        <td class="align-middle">{{$row->vc6}}</td>
                        <td class="align-middle">{{$row->vc7}}</td>
                        <td class="align-middle">{{$row->vc8}}</td>
                        <td class="align-middle">{{$row->vc9}}</td>
                        <td class="align-middle">{{$row->vc10}}</td>
                        <td class="align-middle">{{$row->vc11}}</td>
                        <td class="align-middle">{{$row->vc12}}</td>
                        <td class="align-middle">{{$row->vc13}}</td>
                        <td class="align-middle">{{$row->vc14}}</td>
                        <td class="align-middle">{{$row->vc15}}</td>
                        <td class="align-middle">{{$row->amps}}</td>
                        <td class="align-middle">{{$row->temp}}</td>
                        <td class="align-middle">{{$row->svc}}</td>
                        <td class="align-middle">{{$row->created_at}}</td>
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
@endsection
@section('CustomScripts')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
@endsection
