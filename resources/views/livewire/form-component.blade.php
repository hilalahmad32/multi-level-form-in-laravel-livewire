<div>
    <div class="row d-flex justify-content-center">
        <div class="col-xl-4 col-lg-4 col-md-6">
            <form action="" wire:submit.prevent='store'>
                @if ($number == 1)
                    <div class="my-2">
                        <input type="text" wire:model='title' placeholder="Enter Product Name" class="form-control">
                    </div>
                @endif
                @if ($number == 2)
                    <div class="my-2">
                        <input type="text" wire:model='price' placeholder="Enter Product Price"
                            class="form-control">
                    </div>
                @endif
                @if ($number == 3)
                    <div class="my-2">
                        <input type="text" wire:model='category' placeholder="Enter Product Category "
                            class="form-control">
                    </div>
                @endif
                @if ($number == 4)
                    <div class="my-2">
                        <input type="text" wire:model='content' placeholder="Enter Product Content"
                            class="form-control">
                    </div>
                @endif
                @if ($number != 1)
                    <button type='button' wire:click='prev' class="btn btn-success">Prev</button>
                @endif
                @if ($number != 4)
                    <button type='button' wire:click='next' class="btn btn-success ml-2">Next</button>
                @else
                    <button type='submit' class="btn btn-success ml-2">Save</button>
                @endif
            </form>
        </div>
    </div>
</div>
