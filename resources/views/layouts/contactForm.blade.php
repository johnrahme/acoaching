{{ Form::open(array('url' => '/mail')) }}

<style>
    label.required:after {
        color: #e32;
        content: ' *';
        display:inline;
    }
</style>
    <div class = "row">
        <div class = "col-sm-6">
            <div class="form-group">
                <label for="name" class = "required">Namn</label>
                <input type="text" class="form-control" id="name" name = "name" placeholder="Skriv namn">

            </div>
            <div class="form-group">
                <label for="email" class = "required">Email</label>
                <input type="email" class="form-control" id="email" name = "email" placeholder="Skriv epost">

            </div>
        </div>
        <div class = "col-sm-6">
            <div class="form-group">
                <label for="message" class = "required">Meddelande</label>
                <textarea class="form-control" id="message" name = "message" rows="5"></textarea>
            </div>
        </div>
    </div>

    <input type = "submit" value = "Skicka" class = "btn btn-success">


{{ Form::close() }}