<div class="ibox">
    <div class="ibox-body">
        <h5 class="font-strong mb-4">DATATABLE</h5>
        <div class="flexbox mb-4">
            <div class="flexbox">
                <label class="mb-0 mr-2">Type:</label>
                <select class="selectpicker show-tick form-control" id="type-filter" title="Please select" data-style="btn-solid" data-width="150px">
                    <option value="">All</option>
                    <option>Shipped</option>
                    <option>Completed</option>
                    <option>Pending</option>
                    <option>Canceled</option>
                </select>
            </div>
            <div class="input-group-icon input-group-icon-left mr-3">
                <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text" placeholder="Search ...">
            </div>
        </div>
        <div class="table-responsive row">
            <table class="table table-bordered table-hover" id="datatable">
                <thead class="thead-default thead-lg">
                <tr>
                    <th>#</th>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Payment</th>
                    <th>Date</th>
                    <th class="no-sort"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <a href="javascript:;">#1254</a>
                    </td>
                    <td>Becky Brooks</td>
                    <td>$457</td>
                    <td>
                        <span class="badge badge-success badge-pill">Shipped</span>
                    </td>
                    <td>Paid</td>
                    <td>17.05.2018</td>
                    <td>
                        <a class="text-muted font-16" href="javascript:;">
                            <i class="ti-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>
                        <a href="javascript:;">#1242</a>
                    </td>
                    <td>Sofia Jackson</td>
                    <td>$1120</td>
                    <td>
                        <span class="badge badge-success badge-pill">Completed</span>
                    </td>
                    <td>Paid</td>
                    <td>07.05.2018</td>
                    <td>
                        <a class="text-muted font-16" href="javascript:;">
                            <i class="ti-trash"></i>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>