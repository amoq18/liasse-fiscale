@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-header">
                <h4 class="card-title">Liste des Banques</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Purchased</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Quantity</th>
                                <th>Shipment</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#0001</td>
                                <td>1 Jan 2019</td>
                                <td>Justin Lee</td>
                                <td>$312</td>
                                <td>28</td>
                                <td>2 Jan 2019</td>
                                <td><span class="badge badge-success">Paid</span></td>
                            </tr>
                            <tr>
                                <td>#0002</td>
                                <td>10 Jan 2019</td>
                                <td>Joe Edwards</td>
                                <td>$62</td>
                                <td>88</td>
                                <td>14 Jan 2019</td>
                                <td><span class="badge badge-success">Paid</span></td>
                            </tr>
                            <tr>
                                <td>#0003</td>
                                <td>19 Feb 2019</td>
                                <td>Mary Wiley</td>
                                <td>$78</td>
                                <td>14</td>
                                <td>21 Feb 2019</td>
                                <td><span class="badge badge-danger">Cancelled</span></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

