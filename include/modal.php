<!-- Sign in Modal -->
<div class="modal fade" id="signin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Sign in</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="col-md-12">
                        <label for="validationServerEmail" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend3">@</span>
                            <input type="email" class="form-control is-invalid" id="validationServerEmail"
                                aria-describedby="inputGroupPrepend3 validationServerEmailFeedback" required>
                            <div id="validationServerEmailFeedback" class="invalid-feedback">
                                Please choose a Email.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerPassword" class="form-label">Pasword</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend3">#</span>
                            <input type="password" class="form-control is-invalid" id="validationServerPassword"
                                aria-describedby="inputGroupPrepend3 validationServerPasswordFeedback" required>
                            <div id="validationServerPasswordFeedback" class="invalid-feedback">
                                Please enter password.
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancle</button>
                        <button type="button" class="btn bg-success text-white">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Sign up Modal -->
<div class="modal fade" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Sign in</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="col-md-12 position-relative">
                        <label for="validationTooltip01" class="form-label">First name</label>
                        <input type="text" class="form-control" id="validationTooltip01" placeholder="Ihsan" required>
                        <div class="valid-tooltip">
                        Looks good!
                        </div>
                    </div>
                        <div class="col-md-12 position-relative">
                            <label for="validationTooltip02" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="validationTooltip02" placeholder="Chandio" required>
                            <div class="valid-tooltip">
                            Looks good!
                            </div>
                        </div>
                    <div class="col-md-12">
                        <label for="validationServerEmail" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend3">@</span>
                            <input type="email" class="form-control is-invalid" id="validationServerEmail"
                                aria-describedby="inputGroupPrepend3 validationServerEmailFeedback" required>
                            <div id="validationServerEmailFeedback" class="invalid-feedback">
                                Please choose a Email.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerPassword" class="form-label">Pasword</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend3">#</span>
                            <input type="password" class="form-control is-invalid" id="validationServerPassword"
                                aria-describedby="inputGroupPrepend3 validationServerPasswordFeedback" required>
                            <div id="validationServerPasswordFeedback" class="invalid-feedback">
                                Please enter Password.
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancle</button>
                        <button type="button" class="btn bg-success text-white">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>