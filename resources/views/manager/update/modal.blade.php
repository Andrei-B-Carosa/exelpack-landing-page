<!-- Modal UPDATE-->
<div class="modal fade" id="modalUpdateSchedule" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> College Schedule </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <form action="college-create-schedule" data-url="sys-admin-create" id="form-schedule" class="form-schedule" method="POST">

                        <div class="form-group row">
                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                <label class="form-label">Term</label>
                                <select class="form-control mb-3 update-term" name="term" >
                                    <option value="">Select Term</option>
                                    <option value="prelim">Prelim</option>
                                    <option value="midterm">Midterm</option>
                                    <option value="finals">Finals</option>
                                </select>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                <label class="form-label">Academic Year</label>
                                <span class="div-ay"></span>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                <label class="form-label">Semester</label>
                                <select class="form-control mb-3 update-sem" name="sem" >
                                    <option value="">Select Semester</option>
                                    <option value="1">1st Semester</option>
                                    <option value="2">2nd Semester</option>
                                    <option value="3">Short Term</option>
                                </select>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                <label class="form-label">Start</label>
                                <input type="datetime-local" value="" class="form-control update-start mb-3" name="start">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>


                        <div class="form-group row mb-5">
                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                <label class="form-label">Deadline</label>
                                <input type="datetime-local" value="" class="form-control update-deadline mb-3" name="deadline">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="form-group mb-1 row">
                            <div class="col-lg-12 fv-row fv-plugins-icon-container mb-0">
                                <label class="form-label">Status</label>
                                <select class="form-control mb-3 update-status" name="is_active">
                                    <option value="">Select Status</option>
                                    <option value="1">Open</option>
                                    <option value="0">Closed</option>
                                    <option value="2">Late Submission</option>
                                </select>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="form-group row mb-5 g-0 d-none div-remove-schedule">
                            <div class="col-sm-12 mr-3">
                                <label class="checkbox checkbox-danger">
                                    <input type="checkbox" name="remove_schedule" value="1">
                                    <span></span>
                                    <em class="ml-2 text-muted">Enabling this checkbox will remove the schedule.</em>
                                </label>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold save-changes">Save changes</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal GS UPDATE-->
<div class="modal fade" id="modalGSUpdateSchedule" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Graduate School Schedule </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <form action="gs-create-schedule" data-url="sys-admin-create" id="gs-form-schedule" class="form-schedule" method="POST">

                        <div class="form-group row mb-5">
                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                <label class="form-label">Wave #</label>
                                <select class="form-control mb-0 gs-update-wave" name="wave">
                                    <option value="">Select Wave</option>
                                    <option value="1">Wave #1</option>
                                    <option value="2">Wave #2</option>
                                    <option value="3">Wave #3</option>
                                </select>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                <label class="form-label">Term</label>
                                <select class="form-control gs-update-term" name="term">
                                    <option value="">Select Term</option>
                                    <option value="prelim">Prelim</option>
                                    <option value="midterm">Midterm</option>
                                    <option value="finals">Finals</option>
                                </select>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                <label class="form-label">Academic Year</label>
                                <span class="gs-div-ay"></span>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                <label class="form-label">Semester</label>
                                <select class="form-control gs-update-sem" name="sem" >
                                    <option value="">Select Semester</option>
                                    <option value="1">1st Semester</option>
                                    <option value="2">2nd Semester</option>
                                    <option value="3">Short Term</option>
                                </select>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                <label class="form-label">Start</label>
                                <input type="datetime-local" value="" class="form-control gs-update-start" name="start">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>


                        <div class="form-group row mb-5">
                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                <label class="form-label">Deadline</label>
                                <input type="datetime-local" value="" class="form-control gs-update-end" name="end">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="form-group mb-1 row">
                            <div class="col-lg-12 fv-row fv-plugins-icon-container mb-0">
                                <label class="form-label">Status</label>
                                <select class="form-control gs-update-status" name="status">
                                    <option value="">Select Status</option>
                                    <option value="1">Open</option>
                                    <option value="0">Closed</option>
                                    <option value="2">Late Submission</option>
                                </select>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="form-group row mb-5 g-0 d-none div-remove-schedule">
                            <div class="col-sm-12 mr-3">
                                <label class="checkbox checkbox-danger">
                                    <input type="checkbox" name="remove_schedule" value="1">
                                    <span></span>
                                    <em class="ml-2 text-muted">Enabling this checkbox will remove the schedule.</em>
                                </label>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold gs-save-changes">Save changes</button>
            </div>
        </div>
    </div>
</div>

