<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <div class="vertical-menu-icon">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <div class="logobar">
                        <a href="{{url('/')}}" class="logo logo-small"><img id="logocustom" src="../../assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                    </div>
                    <a class="nav-link active" id="v-pills-admin-tab" data-toggle="pill" href="#v-pills-admin" role="tab" aria-controls="v-pills-admin" aria-selected="true"><img src="../../assets/images/svg-icon/crm.svg" class="img-fluid" alt="CRM" data-toggle="tooltip" data-placement="top" title="Admin"></a>
                    <a class="nav-link" id="v-pills-sales-manager-tab" data-toggle="pill" href="#v-pills-sales-manager" role="tab" aria-controls="v-pills-sales-manager" aria-selected="false"><img src="../../assets/images/svg-icon/crm.svg" class="img-fluid" alt="eCommerce" data-toggle="tooltip" data-placement="top" title="Sales Manager"></a>
                    <a class="nav-link" id="v-pills-mover-tab" data-toggle="pill" href="#v-pills-mover" role="tab" aria-controls="v-pills-mover" aria-selected="false"><img src="../../assets/images/svg-icon/crm.svg" class="img-fluid" alt="Hospital" data-toggle="tooltip" data-placement="top" title="Mover"></a>
                    <a class="nav-link" id="v-pills-sales-agent-tab" data-toggle="pill" href="#v-pills-sales-agent" role="tab" aria-controls="v-pills-sales-agent" aria-selected="false"><img src="../../assets/images/svg-icon/crm.svg" class="img-fluid" alt="UI Kits" data-toggle="tooltip" data-placement="top" title="Sales Agent"></a>
                    <a class="nav-link" id="v-pills-owner-operator-tab" data-toggle="pill" href="#v-pills-owner-operator" role="tab" aria-controls="v-pills-owner-operator" aria-selected="false"><img src="../../assets/images/svg-icon/crm.svg" class="img-fluid" alt="Owner-Operator" data-toggle="tooltip" data-placement="top" title="Owner Operator"></a>
                    <a class="nav-link" id="v-pills-affiliate-tab" data-toggle="pill" href="#v-pills-affiliate" role="tab" aria-controls="v-pills-affiliate" aria-selected="false"><img src="../../assets/images/svg-icon/crm.svg" class="img-fluid" alt="Afiliate" data-toggle="tooltip" data-placement="top" title="Affiliate"></a>
                    <a class="nav-link" id="v-pills-client-tab" data-toggle="pill" href="#v-pills-client" role="tab" aria-controls="v-pills-client" aria-selected="false"><img src="../../assets/images/svg-icon/crm.svg" class="img-fluid" alt="Client" data-toggle="tooltip" data-placement="top" title="Client"></a>
                </div>
            </div>
            <div class="vertical-menu-detail">
                <div class="logobar">
                    <a href="{{url('/')}}"><h4 class="menu-title">Small Moves</h4></a>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-admin" role="tabpanel" aria-labelledby="v-pills-admin-tab">
                      <ul class="vertical-menu">
                          <li><h5 class="menu-title pt-2">Admin</h5></li>
                          <li><a href="{{url('/admin-dashboard')}}"><img src="../../assets/images/svg-icon/crm.svg" class="img-fluid" alt="dashboard">Admin<i class="feather icon-chevron-right"></i></a>
                              <ul class="vertical-submenu">
                                  <li><a href="{{url('/admin-branding')}}">Branding</a></li>
                                  <li><a href="{{url('/users')}}">Users</a></li>
                                  <li><a href="{{url('/admin-templates')}}">Templates<i class="feather icon-chevron-right"></i></a>
                                      <ul class="vertical-submenu">
                                          <li><a href="{{url('/admin-email-quote')}}">Quote Emails</a></li>
                                          <li><a href="{{url('/admin-email-booking')}}">Booking Emails</a></li>
                                          <li><a href="{{url('/admin-email-billoflanding')}}">Bill of Landing</a></li>
                                      </ul>
                                  </li>
                                  <li><a href="{{url('/admin-tokens')}}">Tokens</a></li>
                                  <li><a href="{{url('/admin-rates')}}">Rates</a></li>
                                  <li><a href="{{url('/admin-promotions')}}">Promotions</a></li>
                              </ul>
                          </li>
                          <li><a href="{{url('/admin-dashboard')}}"><img src="../../assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard">Dashboard</a></li>
                          <li><a href="{{url('/admin-calendar')}}"><img src="../../assets/images/svg-icon/calender.svg" class="img-fluid" alt="admin-calendar">Calendar</a></li>
                          <li><a href="{{url('/admin-calls')}}"><img src="../../assets/images/svg-icon/customers.svg" class="img-fluid" alt="calls">Calls</a></li>
                          <li><a href="{{url('/admin-leads')}}"><img src="../../assets/images/svg-icon/charts.svg" class="img-fluid" alt="leads">Leads</a></li>
                          <li><a href="{{url('/admin-accounts')}}"><img src="../../assets/images/svg-icon/customers.svg" class="img-fluid" alt="accounts">Accounts</a></li>
                          <li><a href="{{url('/admin-quotes')}}"><img src="../../assets/images/svg-icon/pages.svg" class="img-fluid" alt="quotes">Quotes</a></li>
                          <li><a href="{{url('/admin-jobs')}}"><img src="../../assets/images/svg-icon/truck-mid-white.png" class="img-fluid" alt="jobs">Moves</a></li>
                          <li><a href="{{url('/admin-invoices')}}"><img src="../../assets/images/svg-icon/forms.svg" class="img-fluid" alt="invoices">Invoices</a></li>
                          <li><a href="{{url('/admin-cases')}}"><img src="../../assets/images/svg-icon/icons.svg" class="img-fluid" alt="cases">Cases</a></li>
                          <li><a href="{{url('/admin-reports')}}"><img src="../../assets/images/svg-icon/reports.svg" class="img-fluid" alt="dashboard">Reports<i class="feather icon-chevron-right"></i></a>
                              <ul class="vertical-submenu">
                                  <li><a href="{{url('/admin-reports')}}">Sales</a></li>
                                  <li><a href="{{url('/admin-reports')}}">Services</a></li>
                                  <li><a href="{{url('/admin-reports')}}">Financials</a></li>
                                  <li><a href="{{url('/admin-reports')}}">Payroll</a></li>
                              </ul>
                          </li>
                      </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-sales-manager" role="tabpanel" aria-labelledby="v-pills-sales-manager-tab">
                        <ul class="vertical-menu">
                            <li><h5 class="menu-title">Sales Manager</h5></li>
                            <li><a href="{{url('/sales-manager-dashboard')}}"><img src="../../assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard">Dashboard</a></li>
                            <li><a href="{{url('/sales-manager-calendar')}}"><img src="../../assets/images/svg-icon/calender.svg" class="img-fluid" alt="admin-calendar">Calendar</a></li>
                            <li><a href="{{url('/sales-manager-calls')}}"><img src="../../assets/images/svg-icon/customers.svg" class="img-fluid" alt="calls">Calls</a></li>
                            <li><a href="{{url('/sales-manager-leads')}}"><img src="../../assets/images/svg-icon/charts.svg" class="img-fluid" alt="leads">Leads</a></li>
                            <li><a href="{{url('/sales-manager-accounts')}}"><img src="../../assets/images/svg-icon/customers.svg" class="img-fluid" alt="accounts">Accounts</a></li>
                            <li><a href="{{url('/sales-manager-quotes')}}"><img src="../../assets/images/svg-icon/pages.svg" class="img-fluid" alt="quotes">Quotes</a></li>
                            <li><a href="{{url('/sales-manager-jobs')}}"><img src="../../assets/images/svg-icon/truck-mid-white.png" class="img-fluid" alt="jobs">Moves</a></li>
                            <li><a href="{{url('/sales-manager-invoices')}}"><img src="../../assets/images/svg-icon/forms.svg" class="img-fluid" alt="invoices">Invoices</a></li>
                            <li><a href="{{url('/sales-manager-cases')}}"><img src="../../assets/images/svg-icon/forms.svg" class="img-fluid" alt="invoices">Cases</a></li>
                            <li><a href="{{url('/sales-manager-reports')}}"><img src="../../assets/images/svg-icon/reports.svg" class="img-fluid" alt="dashboard">Reports<i class="feather icon-chevron-right"></i></a>
                                <ul class="vertical-submenu">
                                    <li><a href="{{url('/sales-manager-reports')}}">Sales</a></li>
                                    <li><a href="{{url('/sales-manager-reports')}}">Services</a></li>
                                    <li><a href="{{url('/sales-manager-reports')}}">Financials</a></li>
                                    <li><a href="{{url('/sales-manager-reports')}}">Payroll</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-mover" role="tabpanel" aria-labelledby="v-pills-mover-tab">
                        <ul class="vertical-menu">
                            <li><h5 class="menu-title">Mover</h5></li>
                        <li><a href="{{url('/mover-calendar')}}"><img src="../../assets/images/svg-icon/calender.svg" class="img-fluid" alt="mover-calendar">Calendar</a></li>
                        <li><a href="{{url('/mover-jobs')}}"><img src="../../assets/images/svg-icon/truck-mid-white.png" class="img-fluid" alt="jobs">Moves</a></li>
                        <li><a href="{{url('/mover-availability')}}"><img src="../../assets/images/svg-icon/truck-mid-white.png" class="img-fluid" alt="jobs">Availability</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-sales-agent" role="tabpanel" aria-labelledby="v-pills-sales-agent-tab">
                        <ul class="vertical-menu">
                            <li><h5 class="menu-title">Sales Agent</h5></li>
                            <li><a href="{{url('/sales-agent-dashboard')}}"><img src="../../assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard">Dashboard</a></li>
                            <li><a href="{{url('/sales-agent-calendar')}}"><img src="../../assets/images/svg-icon/calender.svg" class="img-fluid" alt="admin-calendar">Calendar</a></li>
                            <li><a href="{{url('/sales-agent-calls')}}"><img src="../../assets/images/svg-icon/customers.svg" class="img-fluid" alt="calls">Calls</a></li>
                            <li><a href="{{url('/sales-agent-leads')}}"><img src="../../assets/images/svg-icon/charts.svg" class="img-fluid" alt="leads">Leads</a></li>
                            <li><a href="{{url('/sales-agent-accounts')}}"><img src="../../assets/images/svg-icon/customers.svg" class="img-fluid" alt="accounts">Accounts</a></li>
                            <li><a href="{{url('/sales-agent-quotes')}}"><img src="../../assets/images/svg-icon/pages.svg" class="img-fluid" alt="quotes">Quotes</a></li>
                            <li><a href="{{url('/sales-agent-jobs')}}"><img src="../../assets/images/svg-icon/truck-mid-white.png" class="img-fluid" alt="jobs">Moves</a></li>
                            <li><a href="{{url('/sales-agent-invoices')}}"><img src="../../assets/images/svg-icon/forms.svg" class="img-fluid" alt="invoices">Invoices</a></li>
                            <li><a href="{{url('/sales-agent-cases')}}"><img src="../../assets/images/svg-icon/forms.svg" class="img-fluid" alt="invoices">Cases</a></li>
                          </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-owner-operator" role="tabpanel" aria-labelledby="v-pills-owner-operator-tab">
                        <ul class="vertical-menu">
                        <li><h5 class="menu-title">Owner Operator</h5></li>
                        <li><a href="{{url('/owner-operator-dashboard')}}"><img src="../../assets/images/svg-icon/crm.svg" class="img-fluid" alt="dashboard">Admin
                          <!-- <i class="feather icon-chevron-right"></i> -->
                            </a>
                            <!-- <ul class="vertical-submenu">
                                <li><a href="{{url('/owner-operator-branding')}}">Branding</a></li>
                                <li><a href="{{url('/owner-operator-users')}}">Users</a></li>
                                <li><a href="{{url('/owner-operator-templates')}}">Templates<i class="feather icon-chevron-right"></i></a>
                                    <ul class="vertical-submenu">
                                        <li><a href="{{url('/owner-operator-email-quote')}}">Quote Emails</a></li>
                                        <li><a href="{{url('/owner-operator-email-booking')}}">Booking Emails</a></li>
                                        <li><a href="{{url('/owner-operator-email-billoflanding')}}">Bill of Landing</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('/owner-operator-tokens')}}">Tokens</a></li>
                                <li><a href="{{url('/owner-operator-rates')}}">Rates</a></li>
                                <li><a href="{{url('/owner-operator-promotions')}}">Promotions</a></li>
                            </ul> -->
                        </li>
                        <li><a href="{{url('/owner-operator-dashboard')}}"><img src="../../assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard">Dashboard</a></li>
                        <li><a href="{{url('/owner-operator-calendar')}}"><img src="../../assets/images/svg-icon/calender.svg" class="img-fluid" alt="own-operator-calendar">Calendar</a></li>
                        <li><a href="{{url('/owner-operator-jobs')}}"><img src="../../assets/images/svg-icon/truck-mid-white.png" class="img-fluid" alt="jobs">Moves</a></li>
                        <li><a href="{{url('/owner-operator-invoices')}}"><img src="../../assets/images/svg-icon/forms.svg" class="img-fluid" alt="invoices">Invoices</a></li>
                        <li><a href="{{url('/owner-operator-cases')}}"><img src="../../assets/images/svg-icon/icons.svg" class="img-fluid" alt="cases">Cases</a></li>
                        <li><a href="{{url('/owner-operator-reports')}}"><img src="../../assets/images/svg-icon/reports.svg" class="img-fluid" alt="dashboard">Reports<i class="feather icon-chevron-right"></i></a>
                          <ul class="vertical-submenu">
                                <li><a href="{{url('/owner-operator-reports')}}">Sales</a></li>
                                <li><a href="{{url('/owner-operator-reports')}}">Services</a></li>
                                <li><a href="{{url('/owner-operator-reports')}}">Financials</a></li>
                                <li><a href="{{url('/owner-operator-reports')}}">Payroll</a></li>
                            </ul>
                        </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-affiliate" role="tabpanel" aria-labelledby="v-pills-affiliate-tab">
                        <ul class="vertical-menu">
                            <li><h5 class="menu-title">Affiliate</h5></li>
                        <li><a href="{{url('/affiliate-dashboard')}}"><img src="../../assets/images/svg-icon/calender.svg" class="img-fluid" alt="calendar">Dashboard</a></li>
                        <li><a href="{{url('/affiliate-submit-leads')}}"><img src="../../assets/images/svg-icon/forms.svg" class="img-fluid" alt="jobs">Submit a Lead</a></li>
                        <li><a href="{{url('/affiliate-earnings')}}"><img src="../../assets/images/svg-icon/forms.svg" class="img-fluid" alt="invoices">Earnings</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-client" role="tabpanel" aria-labelledby="v-pills-client-tab">
                        <ul class="vertical-menu">
                            <li><h5 class="menu-title">Client</h5></li>
                        <li><a href="{{url('/client-calendar')}}"><img src="../../assets/images/svg-icon/calender.svg" class="img-fluid" alt="calendar">Calendar</a></li>
                        <li><a href="{{url('/client-quotes')}}"><img src="../../assets/images/svg-icon/pages.svg" class="img-fluid" alt="quotes">Quotes</a></li>
                        <li><a href="{{url('/client-moves')}}"><img src="../../assets/images/svg-icon/pages.svg" class="img-fluid" alt="moves">Moves</a></li>
                        <li><a href="{{url('/client-invoices')}}"><img src="../../assets/images/svg-icon/forms.svg" class="img-fluid" alt="client-invoices">Invoices</a></li>
                        <li><a href="{{url('/client-cases')}}"><img src="../../assets/images/svg-icon/forms.svg" class="img-fluid" alt="-client-cases">Cases</a></li>
                        <li><a href="{{url('/client-public-feedback')}}"><img src="../../assets/images/svg-icon/forms.svg" class="img-fluid" alt="-public-feedback">Public Feedback</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>
