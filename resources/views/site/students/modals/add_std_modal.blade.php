<div id="add-std-modal" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- Success and Error Messages --}}
                @include('site.inc.messages')

                <form action="{{route('students.store')}}" method="POST" id="add-std-form">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Student Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Student Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary save-btn">Save</button>
            </div>
        </div>
    </div>
</div>
