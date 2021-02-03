<div class="container mt-12">
    <!-- Table -->
    <!-- Dark table -->
    <div class="row mt-5">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0" style="
                background: #f6f9fc;
            ">
                    <h3 class="mb-0">User rights</h3>
                    <img src="https://image.flaticon.com/icons/svg/236/236822.svg" class="img-responsive" width="150" style="margin: 0 auto;"> 
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                                        </tr>
                        </thead>
                        <tbody>
                                @foreach( DB::table('roles')->orderBy('id', 'desc')->get()  as $item_roles)

            
                                
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder"
                                                src="https://image.flaticon.com/icons/svg/145/145859.svg">
                                        </a>
                                        <div class="media-body">
                                            <span class="mb-0 text-sm">{{ $item_roles->name}}</span>
                                        </div>
                                    </div>
                                </th>
                            
                                <td>
                                    <span class="badge badge-dot mr-4" style="
                                            background: white !important;
                                            color: #172b4d !important;
                                        ">
                                        <i class="bg-warning pnd"></i> {!!$item_roles->description!!}
                                    </span>
                                </td>
                             
                                {{--  <td>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2">60%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>  --}}

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>