<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-heading" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="login-heading">Edit your profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
            <form id="edit-form" class="form" role="form" method="post" action="api/edit_submit.php">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="30" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" maxlength="10" minlength="10" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-university"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="college_name" placeholder="College Name" maxlength="150" required>
                    </div>

                    <div class="form-group">
                        <span>I'm a</span>
                        <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" /> Male
                        <label for="gender-male">
                        </label>
                        <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                        <label for="gender-female">
                            Female
                        </label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Edit profile</button>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>
