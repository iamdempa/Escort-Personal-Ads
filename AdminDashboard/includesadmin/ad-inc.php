<!-- Sign up card -->
<div class="card person-card">
    <div class="card-body">        
        
        <!-- First row (on medium screen) -->
        <div class="row">
            <div class="form-group col-md-3 text-right"></div>

            <div class="form-group col-md-6">                                
                <input id="title" name="title" value="<?php echo $row['adtitle']; ?>" type="text" class="form-control" placeholder="Title of your Ad">
                <div id="first_name_feedback" class="invalid-feedback"></div>
            </div>

            <div class="form-group col-md-3"></div>

        </div>
    </div>
</div>