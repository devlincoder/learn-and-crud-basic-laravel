<form method="POST" action="/unicode">
    <div>
        <input type="text" name="username" placeholder="Enter username...."/>
        <input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>
    </div>
    <button type="submit">Submit</button>
</form>