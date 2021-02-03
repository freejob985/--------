<div class="container mt-12">
    <!-- Table -->
    <!-- Dark table -->
    <div class="row mt-5">
        <div class="col">
            <div class="card bg-default shadow">
                <div class="card-header bg-transparent border-0" style="
                background: #f6f9fc;
            ">
                    <h3 class="text-white mb-0">Users table</h3>
                    <img src="https://image.flaticon.com/icons/svg/201/201565.svg" class="img-responsive" width="150" style="margin: 0 auto;"> 

                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
                        <thead class="thead-dark" style="border-bottom: 0px solid rgba(0, 0, 0, 0.12)!important;border: 3px solid #172b4d;">
                            <tr>
                                <th scope="col">User</th>
                                <th scope="col">Mail</th>
                                <th scope="col">Status</th>
                                <th scope="col">Type</th>

                            </tr>
                        </thead>


                        <tbody>
                            @foreach($users as $item_users)

                            <tr style="border-bottom: 0px solid rgba(0, 0, 0, 0.12)!important;border: 1px solid #172b4d;">
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="{{ $item_users->avatar}}">
                                        </a>
                                        <div class="media-body">
                                            <span class="mb-0 text-sm">{{ $item_users->name}}</span>
                                        </div>
                                    </div>
                                </th>
                                <td style="
                                    color: white;
                                    font-weight: bold;
                                ">
                                    {{ $item_users->email}}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        @php
                                        if (empty($item_users->email_verified_at)) {
                                        echo "pending";
                                        }else{
                                        echo"active";
                                        }
                                        @endphp
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">

                                        @foreach ($item_users->roles as $item)
                                        {{ $item->name }}
                                        @endforeach
                                    </span>
                                </td>


                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>