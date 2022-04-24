<div class="modal fade" id="contact">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-bold modal-title"><img src="{{ asset('img') }}/pedebro.png" alt="" width="26"
                        height="26" class="d-inline-block align-text-top"> PEDEBRO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2 class="mb-4 text-bold">Contact</h2>
                <div class="card p-3">
                    <div class="form-group">
                        <label for="job name">Contact date</label>
                        <input type="text" class="form-control" id="job name"
                            placeholder="Enter job name" value="{{ date('d-m-Y') }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="job name">Interview date</label>
                        <input type="date" class="form-control" id="job name"
                            placeholder="Enter job name">
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark">Send</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
