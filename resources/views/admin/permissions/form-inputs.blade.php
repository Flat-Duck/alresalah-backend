@php $editing = isset($permission) @endphp
{{-- <div class="box-body">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('Name', ($editing ? $permission->Name : '')) }}" class="form-control" id="name"   maxlength="255" placeholder="Name" required/>
    </div>
    <div class="form-group col-sm-12 mt-4">
        <h4>Assign Roles</h4>
        @foreach ($roles as $role)
        <div>
            <x-inputs.checkbox
                id="role{{ $role->id }}"
                name="roles[]"
                label="{{ ucfirst($role->name) }}"
                value="{{ $role->id }}"
                :checked="isset($permission) ? $role->hasPermissionTo($permission) : false"
                :add-hidden-value="false"
            ></x-inputs.checkbox>
        </div>
        @endforeach
    </div>
</div> --}}
