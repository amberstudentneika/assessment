<div>
    <form>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Student Name :</label>
                    <input type="text" wire:model="name" class="form-control">
                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Student Email :</label>
                    <input type="text" wire:model="email" class="form-control">
                    @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Student Password :</label>
                    <input type="password" wire:model="password" class="form-control">
                    @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="flex items-baseline justify-between">
                <button wire:click="addStudent()" class="px-6 py-2 mt-4 text-white bg-green-600 rounded-lg hover:bg-green-800">Create</button>
            </div>
        </div>
    </form>

    <form>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Teacher Name :</label>
                    <input type="text" wire:model="name" class="form-control">
                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Teacher Email :</label>
                    <input type="text" wire:model="email" class="form-control">
                    @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Teacher Password :</label>
                    <input type="password" wire:model="password" class="form-control">
                    @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="flex items-baseline justify-between">
                <button wire:click="addTeacher()" class="px-6 py-2 mt-4 text-white bg-green-600 rounded-lg hover:bg-green-800">Create</button>
            </div>
        </div>
    </form>
</div>
