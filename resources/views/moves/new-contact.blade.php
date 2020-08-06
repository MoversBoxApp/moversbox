        <label>Find an existing client or add a new one.</label>
        <div class="tab-content" id="defaultTabContent">
            <div class="test border rounded tab-pane fade show active" id="new-user" role="tabpanel" aria-labelledby="new-user-tab">
                <div class="form-row">
                  <div class="form-check form-check-inline p-b-20">
                    <input checked onchange="hideCompany()" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">My Home</label>
                  </div>
                  <div class="form-check form-check-inline p-b-20">
                    <input onchange="showCompany()" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">A Business</label>
                  </div>
                  <div class="form-check form-check-inline p-b-20 p-l-20">
                    <a href="{{ route('users.create')}}">New Client?</a>
                  </div>
                </div>
                <div class="form-row">
                      <div id="company" class="company form-group col-md-12">
                          <label for="company">Company</label>
                          <input name="company" type="text" class="form-control">
                      </div>
                  </div>
              <div class="form-group">
                  <label class="col-lg-3 col-form-label" for="client-phone">Phone<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="client-phone" name="client-phone" placeholder="(__)-___-____">
                  <label class="col-lg-3 col-form-label" for="email">Email <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="email" name="client-email" placeholder="_@_._">
              </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="firstname">First Name<span class="text-danger">*</span></label>
                          <input type="text" name="firstname" class="form-control" id="firstname">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="lastname">Last Name<span class="text-danger">*</span></label>
                          <input type="text" name="lastname" class="form-control" id="lastname">
                      </div>
                  </div>
              <div class="p-t-50">
                <a onclick="showContact2()" class="btn-contact-2 btn btn-primary">Add Another Contact</a>
                <!-- <button onclick="showContact2()" class="btn btn-primary">Add Another Contact</button> -->
              </div>
              <div class="p-t-30 contact-2" id="contact-2">
                <div class="form-group">
                    <label class="col-lg-3 col-form-label" for="contact-phone">Phone<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="contact-phone" name="contact-phone" placeholder="(__)-___-____">
                </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstname-2">First Name<span class="text-danger">*</span></label>
                            <input type="text" name="firstname-2" class="form-control" id="firstname-2">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname-2">Last Name<span class="text-danger">*</span></label>
                            <input type="text" name="lastname-2" class="form-control" id="lastname-2">
                        </div>
                    </div>
              </div>
            </div>
        </div>
