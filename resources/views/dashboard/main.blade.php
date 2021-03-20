@extends('dashboard.layout')
@section('content')

    <div id="app">
        <div class="row">
            <div id="widget-1" class="col-md-4">
                <div class="card bg-gradient-info card-stats">
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="text-uppercase text-white mb-0">Population</h5>
                                <span class="font-weight-bold text-white mb-0">100</span>
                            </div>

                            <div class="col-auto">
                                <div class="icon icon-shape bg-white text-info rounded-circle shadow">
                                    <i class="fa fa-money-bill"></i>
                                </div>
                            </div>
                        </div>

                        <p class="mt-3 mb-0 text-sm cursor-default">
                            <span class="text-white"> Gender</span>
                            <el-tooltip
                            content="Open Invoices: ₵8,605.31 / Overdue Invoices: ₵14,463.23"
                            effect="dark"
                            :open-delay="100"
                            placement="top">
                                <span class="text-white font-weight-bold float-right">Male:10 | Female: 90</span>
                            </el-tooltip>
                        </p>
                    </div>
                </div>
            </div>

            <div id="widget-3" class="col-md-4">
                <div class="card bg-gradient-success card-stats">
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="text-uppercase text-white mb-0">Total Profit</h5>
                                <span class="font-weight-bold text-white mb-0">₵7,085.25</span>
                            </div>

                            <div class="col-auto">
                                <div class="icon icon-shape bg-white text-success rounded-circle shadow">
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                        </div>

                        <p class="mt-3 mb-0 text-sm cursor-default">
                            <span class="text-white">Upcoming</span>
                            <el-tooltip
                            content="Open Profit: ₵696.23 / Overdue Profit: ₵6,561.65"
                            effect="dark"
                            :open-delay="100"
                            placement="top">
                                <span class="text-white font-weight-bold float-right">₵696.23 / ₵6,561.65</span>
                            </el-tooltip>
                        </p>
                    </div>
                </div>
            </div>
            <div id="widget-4" class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">

                            <div class="col-10 text-nowrap">
                                <h4 class="mb-0 long-texts">Members Chart</h4>
                            </div>

                            <div class="col-2 hidden-sm">
                                <span class="float-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm items-align-center py-2 mr-0 shadow-none--hover" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v text-muted"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <button type="button" class="dropdown-item" title="Edit" @click="onEditWidget(4)">Edit</button>
                                            <div class="dropdown-divider"></div>
                                            <button type="button" class="dropdown-item action-delete" title="Delete" @click="confirmDelete(&quot;http://akaunting.test/common/widgets/4&quot;, &quot;Widgets&quot;, &quot;Confirm delete &lt;strong&gt;Cash Flow&lt;/strong&gt; widget?&quot;, &quot;Cancel&quot;, &quot;Delete&quot;)">Delete</button>

                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="card-body" id="widget-line-4">
                        <div class="chart">
                            <canvas style="display: none;" id="jkpdchegimwluqonvbtrayszf"  height='300' ></canvas>
                            <div id="jkpdchegimwluqonvbtrayszf_loader" style="display: flex; justify-content: center;opacity: 1;align-items: center;height: 300px;">
                                <svg width="50" height="50" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a">
                                            <stop stop-color="#22292F" stop-opacity="0" offset="0%"/>
                                            <stop stop-color="#22292F" stop-opacity=".631" offset="63.146%"/>
                                            <stop stop-color="#22292F" offset="100%"/>
                                        </linearGradient>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <g transform="translate(1 1)">
                                            <path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)" stroke-width="2">
                                                <animateTransform
                                                    attributeName="transform"
                                                    type="rotate"
                                                    from="0 18 18"
                                                    to="360 18 18"
                                                    dur="0.9s"
                                                    repeatCount="indefinite" />
                                            </path>
                                            <circle fill="#22292F" cx="36" cy="18" r="1">
                                                <animateTransform
                                                    attributeName="transform"
                                                    type="rotate"
                                                    from="0 18 18"
                                                    to="360 18 18"
                                                    dur="0.9s"
                                                    repeatCount="indefinite" />
                                            </circle>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="widget-5" class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">

                            <div class="col-10 text-nowrap">
                                <h4 class="mb-0 long-texts">Income By Category</h4>
                            </div>

                            <div class="col-2 hidden-sm">
                                <span class="float-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm items-align-center py-2 mr-0 shadow-none--hover" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v text-muted"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                    <button type="button" class="dropdown-item" title="Edit" @click="onEditWidget(5)">Edit</button>
                                                                                            <div class="dropdown-divider"></div>
                                            <button type="button" class="dropdown-item action-delete" title="Delete" @click="confirmDelete(&quot;http://akaunting.test/common/widgets/5&quot;, &quot;Widgets&quot;, &quot;Confirm delete &lt;strong&gt;Income By Category&lt;/strong&gt; widget?&quot;, &quot;Cancel&quot;, &quot;Delete&quot;)">Delete</button>

                                                                </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="card-body" id="widget-donut-5">
                        <div class="chart-donut">
                            <canvas style="display: none;" id="wtkilyancsvhjuromxzdgepqf"  height='160' ></canvas>
                            <div id="wtkilyancsvhjuromxzdgepqf_loader" style="display: flex; justify-content: center; opacity: 1;align-items: center; height: 160px;">
                                <svg width="50" height="50" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a">
                                        <stop stop-color="#22292F" stop-opacity="0" offset="0%"/>
                                        <stop stop-color="#22292F" stop-opacity=".631" offset="63.146%"/>
                                        <stop stop-color="#22292F" offset="100%"/>
                                    </linearGradient>
                                </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <g transform="translate(1 1)">
                                            <path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)" stroke-width="2">
                                                <animateTransform
                                                    attributeName="transform"
                                                    type="rotate"
                                                    from="0 18 18"
                                                    to="360 18 18"
                                                    dur="0.9s"
                                                    repeatCount="indefinite" />
                                            </path>
                                            <circle fill="#22292F" cx="36" cy="18" r="1">
                                                <animateTransform
                                                    attributeName="transform"
                                                    type="rotate"
                                                    from="0 18 18"
                                                    to="360 18 18"
                                                    dur="0.9s"
                                                    repeatCount="indefinite" />
                                            </circle>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div id="widget-6" class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">

                            <div class="col-10 text-nowrap">
                                <h4 class="mb-0 long-texts">Expenses By Category</h4>
                            </div>

                            <div class="col-2 hidden-sm">
                                <span class="float-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm items-align-center py-2 mr-0 shadow-none--hover" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v text-muted"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                    <button type="button" class="dropdown-item" title="Edit" @click="onEditWidget(6)">Edit</button>
                                                                                            <div class="dropdown-divider"></div>
                                            <button type="button" class="dropdown-item action-delete" title="Delete" @click="confirmDelete(&quot;http://akaunting.test/common/widgets/6&quot;, &quot;Widgets&quot;, &quot;Confirm delete &lt;strong&gt;Expenses By Category&lt;/strong&gt; widget?&quot;, &quot;Cancel&quot;, &quot;Delete&quot;)">Delete</button>

                                                                </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="card-body" id="widget-donut-6">
                        <div class="chart-donut">
                            <canvas style="display: none;" id="whjtskoadnrmlfgcuepxvqzib"  height='160' ></canvas>
                            <div id="whjtskoadnrmlfgcuepxvqzib_loader" style="display: flex; justify-content: center; opacity: 1; align-items: center; height: 160px;">
                                <svg width="50" height="50" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a">
                                            <stop stop-color="#22292F" stop-opacity="0" offset="0%"/>
                                            <stop stop-color="#22292F" stop-opacity=".631" offset="63.146%"/>
                                            <stop stop-color="#22292F" offset="100%"/>
                                        </linearGradient>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <g transform="translate(1 1)">
                                            <path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)" stroke-width="2">
                                                <animateTransform
                                                    attributeName="transform"
                                                    type="rotate"
                                                    from="0 18 18"
                                                    to="360 18 18"
                                                    dur="0.9s"
                                                    repeatCount="indefinite" />
                                            </path>
                                            <circle fill="#22292F" cx="36" cy="18" r="1">
                                                <animateTransform
                                                    attributeName="transform"
                                                    type="rotate"
                                                    from="0 18 18"
                                                    to="360 18 18"
                                                    dur="0.9s"
                                                    repeatCount="indefinite" />
                                            </circle>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <notifications></notifications>

        <form id="form-create" method="POST" action="#"/>
        <component v-bind:is="component"></component>
    </div>

@endsection