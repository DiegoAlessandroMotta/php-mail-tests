<!-- <template x-for="(list, index) in ListTravelers" :key="index"> -->
<div class="accordion-item  border-0 mt-2 booking-widget p-3">
  <h2 class="accordion-header fs-6" id="panelsStayOpen-headingOne">
    <button
      class="border-0 fw-bold letter-spacing-1 px-3 py-1 d-flex w-100 justify-content-between align-items-center"
      type="button" data-bs-toggle="collapse" data-bs-target="#"
      aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
      <span> PERSONAL INFORMATION <i class="ms-2" x-text="index + 1"></i>
      </span>
      <span type="button"
        style="width: 25px;height: 25px;line-height: 15px;"
        class="btn btn-danger btn-sm rounded-circle"
        @click="removeform(index)">&times;</span>
    </button>
  </h2>
  <div id="panelsStayOpen-collapseOne" class="accordion-collapse" aria-labelledby="panelsStayOpen-headingOne">
    <div class="accordion-body">
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="Name" class="form-label label-sm">Full Name</label>
            <input type="text" x-model="list.name"
              :x-ref="'xname'+index" name="names"
              class="form-control form-control-sm"
              aria-describedby="name" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="email"
              class="form-label label-sm">Surnames</label>
            <input type="text" x-model="list.firstName"
              name="firstName" :x-ref="'xfirstName'+index"
              class="form-control form-control-sm"
              aria-describedby="name" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-2">
            <label for="tours" class="form-label label-sm">Gender
            </label>
            <br>
            <select x-model="list.gender" class="form-select"
              id="genderSelect">
              <option value="Female">Female</option>
              <option value="Male">Male</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="email" class="form-label label-sm">Birth
              date</label>
            <input type="date" x-model="list.age" name="emails"
              class="form-control form-control-sm"
              aria-describedby="name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-2">
            <label for="doct" class="form-label fotm label-sm">Doc.
              Type
            </label>
            <select class="form-select form-control-sm"
              x-model="list.docttype" name="tour"
              aria-label="Default select example">
              <option value="Passport">Passport</option>
              <option value="ID/DNI">ID/DNI</option>
              <option value="Driver License">Driver
                License
              </option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="nuember"
              class="form-label label-sm">Document
              Number</label>
            <input type="text" x-model="list.docnumber"
              name="emails" class="form-control form-control-sm"
              aria-describedby="name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="nuember"
              class="form-label label-sm">Coutry</label>
            <input type="text" x-model="list.city" name="emails"
              class="form-control form-control-sm"
              aria-describedby="name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-2">
            <label for="Meals" class="form-label fotm label-sm">
              Meals
              option
            </label>
            <select class="form-select form-control-sm"
              x-model="list.typealimento" name="tour"
              aria-label="Default select example">
              <option value="Vegetarian">Vegetarian
              </option>
              <option value="Normal">Normal</option>
              <option value="Vegan">Vegan </option>
              </option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- </template> -->