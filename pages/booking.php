<main x-data="initBooking('',,263,())" class="bg-light py-5">
  <div class="container-xxl" x-init="getcontry">
    <div class="py-3">
      <h1 class="text-center fw-bold text-uppercase">Titulo</h1>
    </div>
    <div class="row">
      <div class="col-md-7">
        <div>
          <form action="#" @submit.prevent="submitData" data-form-id="booking-form" class="row">
            <div class="co-md-12">
              <div class="div row booking-widget ">
                <div class="col-md-12">
                  <div>
                    <h2 class="text-primary fs-4 fw-bold"><strong>Contact Information</strong></h2>
                  </div>
                  <div class="mb-2 ">
                    <label for="tours" class="form-label text-dark">
                      <b>Which package, tour or trek are you booking?</b>
                    </label>
                    <select class="form-select text-dark text-uppercase  rounded-0"
                      x-on:change="tourselect(DataTour.tour)" x-model="DataTour.tour" name="tour"
                      aria-label="Default select example" required>
                      <option selected disabled value="">Select Tour</option>
                      <option value="1">1</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="Name" class="form-label text-dark fw-bold">Name</label>
                    <input type="text" x-ref="xname" class="form-control  rounded-0 "
                      x-model="DataTour.name" name="Name" id="Name" aria-describedby="emailHelp"
                      required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="emailss" class="form-label text-dark fw-bold">Email</label>
                    <input type="text" x-ref="xemail" class="form-control  rounded-0"
                      x-model="DataTour.email" name="emailss" id="emailName"
                      aria-describedby="emailHelp" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="Country" class="form-label text-dark fw-bold">Country</label>
                    <select x-model="DataTour.country" x-ref="xcountry"
                      x-on:change="selectcode(DataTour.country)"
                      x-init="selectcode(DataTour.country)" class="form-select  rounded-0">
                      <template x-for="item in Country">
                        <option x-bind:selected="item.name === DataTour.country" :value="item.name" x-text="item.name"></option>
                      </template>
                      <option value="none">None</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="Phone" class="form-label text-dark fw-bold">Phone</label>
                    <input type="text" x-ref="xphone" class="form-control  rounded-0" name="Country"
                      id="Phone" aria-describedby="Phone" x-model="DataTour.phone" required>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-2">
                    <label for="tours" class="form-label text-dark fw-bold">
                      <small>Do you want a group or private service?</small>
                    </label>
                    <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="checkprivate"
                        id="checkprivate" x-model="DataTour.type" value="Group">
                      <label class="form-check-label text-dark fw-bold"
                        for="checkprivate">Group</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input " x-model="DataTour.type" type="radio"
                        name="checkprivate" id="inlineRadio2" value="Private">
                      <label class="form-check-label text-dark fw-bold"
                        for="inlineRadio2">Private</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-dark fw-bold"> Travel Date Start</label>
                    <input type="date" class="form-control date  rounded-0" id="date"
                      x-model="DataTour.startDate" x-ref="xstartDate" name="startDate"
                      id="exampleInputEmail1" aria-describedby="emailHelp" required>
                  </div>
                </div>
                <div class="col-md-6"></div>
              </div>
            </div>
            <!-- TRAVELLERS LIST -->
            <div class="col-md-12">
              <div class="list-pass-items ">
                <div>
                  <h5 class="text-primary fw-bold fs-4">Traveler List</h5>
                </div>
                <div class="accordion " id="accordionPanelsStayOpenExample">
                  <!-- traveler-template here -->
                  <?php
                  require("./templates/traveler-template.php");
                  ?>
                  <template x-if="haserrors.length > 0">
                    <span class="text-danger w-100 d-block fs-sm bg-white p-2"
                      x-text="haserrors[0]"></span>
                  </template>
                  <div class="text-end mt-1 mb-2 "> <button type="button"
                      class="btn  btn-sm btn-dark text-white" @click="addform()">+ Add
                      traveler</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12" x-show="deposit!=6">
              <div class="card border-0">
                <div class="card-header border-0 bg-white">
                  <span class="fw-bold text-primary">UPGRADES AND EXTRAS</span>
                </div>
                <div class="card-body">
                  <div class="mb-2 fs-sm-9">
                    <label for="form." class="form-label d-block"><b>Routes
                        Extras</b><i class="bi ms-1 fs-5 text-secondary bi bi-info-circle-fill"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-title="Check availability before booking"></i></label>
                    <div class="form-check form-check-"><input class="form-check-input"
                        x-on:change="addqualityExtrahike(1)" type="radio" name="typeroute"
                        x-model="DataTour.extraroute" id="huaynacheck"
                        value="75 USD (Huayna Picchu Mountain)"><label class="form-check-label"
                        for="huaynacheck">Huayna Picchu Mountain (It costs $75 per person)
                      </label>
                      <select name="" id="" x-model="qualityEtraRoute"
                        x-on:change="addqualityExtrahike(2)"
                        class="d-inline-block form-select form-select-sm" style="width: 70px;">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </div>
                    <div class="form-check form-check-"><input class="form-check-input"
                        x-on:change="addqualityExtrahike(2)" type="radio" name="typeroute"
                        x-model="DataTour.extraroute" id="machucheck"
                        value="75 USD (Machu Picchu Mountain)"><label class="form-check-label"
                        for="machucheck">Machu Picchu Mountain (It costs $75 per person)
                      </label>
                      <select name="" id="" x-model="qualityEtraRoute2"
                        x-on:change="addqualityExtrahike(2)"
                        class="d-inline-block form-select form-select-sm" style="width: 70px;">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>

                    </div>
                    <div class="form-check form-check-"><input class="form-check-input" type="radio"
                        name="typeroute" x-model="DataTour.extraroute"
                        x-on:change="addqualityExtrahike(3)" checked id="routenone"
                        value="None"><label class="form-check-label" for="routenone">None
                      </label></div>
                  </div>
                  <!-- train extra -->
                  <div class="mt-3 mb-2">
                    <label for="" class="form-label fs-sm-9 fw-bold">Camping supplies available for rent at our office: sleeping bags, inflatable air mattresses, and poles (optional but recommended).</label>
                    <!-- <textarea name="message" class="form-control" x-model="DataTour.rental" id=""
                                            cols="30" rows="4"></textarea> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- ADD EXTRA ITEMS -->
            <div class="col-md-12">
              <div class="row booking-widget">
                <div class="col-md-12">
                  <div class="mt-3 mb-2">
                    <label for="" class="form-label fs-sm-9 fw-bold">Additional Information</label>
                    <textarea name="message" class="form-control" x-model="DataTour.message" id=""
                      cols="30" rows="4"></textarea>
                  </div>
                  <div class="mb-2">
                    <label for="tours" class="form-label fw-bold"><small>Would you like to
                        add
                        extra
                        day
                        tours? *</small> </label>
                    <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="checkadd"
                        id="checkprivateyes" x-model="DataTour.extra" value="SI" required>
                      <label class="form-check-label" for="checkprivateyes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" x-model="DataTour.extra" type="radio"
                        name="checkadd" id="checkprivateno" value="NO">
                      <label class="form-check-label" for="checkprivateno" required>No</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3 form-check ">
                    <input type="checkbox" class="form-check-input" x-model="DataTour.terms"
                      id="exampleCheck1" x-ref="term" required>
                    <label class="form-check-label" for="exampleCheck1"><b
                        style="color: #59952a;">Terms and
                        conditions</b></label>
                    <p> <small>I accept: Reservation Policies. My BOOKING WITH huaypo expeditions
                        ADVETURE
                        includes the
                        acceptance of the terms and conditions of reservation, I have
                        read,
                        understand
                        and accept the conditions of deposit, fee, reservations,
                        obligations and
                        cancellations</small>.</p>
                    <p class="mb-1" class="text-primary"><strong>Reservation
                        Policies:</strong></p>
                    <p>I have read, printed and accepted the terms: See Link huaypo expeditions <a
                        class="text-primary" class="" href="
                        <?php
                        // echo get_permalink(464)
                        ?>"
                        rel="noopener" target="_blank">Terms and
                        Conditions</a>
                    </p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="text-center py-4">
                    <button type="button" @click="openModal" x-init="$nextTick(() =>openModal)"
                      id="openmodal"
                      onclick="window.booking.openModal()"
                      class="btn btn-dark btn-shadow-primary px-5  rounded-0 btn-lg openmodal">send
                      and pay</button>
                  </div>


                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Secure
                            payments with paypal
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        </div>
                        <div class="modal-body position-relative" x-init="$nextTick(() =>window.amount=amount)">
                          <div class="row align-items-center">
                            <div class="col-md-12">
                              <div class="py-2 d-block text-center">
                                <h3 class="mb-2 text-center">huaypo expeditions
                                </h3>
                                <!-- <img class="img-fluid"
                                  src="https://cocalifeadventure.com/wp-content/uploads/2021/09/logo.png"
                                  alt=""> -->
                              </div>
                            </div>
                            <div class="col-md-6 text-center">
                              <!-- <span>If you want to pay by credit or debit card, don't forget to enter your initial deposit amount.</span> -->
                              <button type="button" x-on:click="payCreditcard"
                                class="btn btn-primary load text-white fw-bold  rounded-0  "
                                target="_blank">
                                Pay with card
                              </button>
                            </div>
                            <div class="col-md-6" x-init="paymentpaypal">
                              <div id="paypal-button-container">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end modal -->
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- col right -->
      <div class="col-md-5">
        <div class="booking-widget position-sticky p-2 " style="top: 10%;">
          <div class="card-body">
            <div class="mb-2 d-block text-center">
              <h5><strong>Reservation summary</strong></h5>
            </div>
            <table class="table table-sm" style="font-size:14px">
              <tbody>
                <tr>
                  <td><strong>Tour:</strong></td>
                  <td x-text="DataTour.tour"></td>
                </tr>
                <tr>
                  <td><strong>Travel date:</strong></td>
                  <td x-text="DataTour.startDate"></td>
                </tr>
                <tr>
                  <td><strong>Routes Extras:</strong></td>
                  <td>
                    <span x-text="DataTour.extraroute"></span>
                    <div x-show="DataTour.extraroute=='75 USD (Huayna Picchu Mountain)'">
                      <span> x</span>
                      <span x-text="qualityEtraRoute"> </span>
                      <span>=</span>
                      <span x-text="qualityEtraRoute*75"></span>
                    </div>
                    <div x-show="DataTour.extraroute=='75 USD (Machu Picchu Mountain)'">
                      <span> x</span>
                      <span x-text="qualityEtraRoute2"> </span>
                      <span>=</span>
                      <span x-text="qualityEtraRoute2*75"></span>
                    </div>

                  </td>
                </tr>
                <tr>
                  <td><strong>Number of travelers</strong></td>
                  <td x-text="ListTravelers.length"></td>
                </tr>
                <tr>
                  <td><strong>Payment deposit</strong></td>
                  <td> <strong>$ <span class="" x-text="amount"></span>.00 USD</strong></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card-footer border-0 bg-white">
            <div class="alert alert-warning">
              <h6 class="text-center">important!</h6>
              <small>Once the initial payment to reserve our services has been made, huaypo expeditions will provide you with a receipt and the reservation contract for the upcoming tour. This document will include the total amount and the remaining balance, which must be paid at our offices</small>
              <!-- <span x-text="DataTour.travelerExtraRoute"></span> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>