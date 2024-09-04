<form action="thankyou" method="post">
    @csrf
    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" name="name" id="name" class="form-control" id="name">
            <div class="errors text-danger">
                @error('name')
                {{$message}}
                @enderror
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email">
            <div class="errors text-danger">
                @error('email')
                {{$message}}
                @enderror
            </div>
        </div>
    </div>
    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Male"
                    checked>
                <label class="form-check-label" for="gridRadios1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Female">
                <label class="form-check-label" for="gridRadios2">
                    Female
                </label>
            </div>
        </div>
    </fieldset>
    <div class="row mb-3">
        <label for="message" class="col-sm-2 col-form-label">Message</label>
        <div class="col-sm-10">
            <textarea name="message" id="" cols="30" rows="10" class="form-control" id="message"></textarea>
            <div class="errors text-danger">
                @error('message')
                {{$message}}
                @enderror
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-10 offset-sm-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1" name="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                    Accept the terms and conditions
                </label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
