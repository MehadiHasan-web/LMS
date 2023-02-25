<div>
    <form wire:submit.prevent="search" class="flex items-center mb-4">
        <input type="text" wire:model.lazy="search" placeholder="Search" class="lms-input">
        <div class="ml-4">
            <button class="lms-btn" type="submit">Search</button>
        </div>
    </form>

    @if (count($leads) > 0)
        <form wire:submit.prevent="admit">
            <div class="mb-4">
                <select wire:model.lazy="lead_id" name="" id="" class="lms-input">
                    <option value="">Select Lead</option>
                    @foreach ($leads as $lead)
                        <option value="{{ $lead->id }}">{{ $lead->name }} - {{ $lead->phone  }}</option>
                    @endforeach
                </select>
            </div>
            @if (!empty($lead_id))
            <div class="mb-4">
                <select wire:change="courseSelected" wire:model.lazy="course_id" name="" id="" class="lms-input">
                    <option value="">Select Course</option>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>
            @endif

            @if (!empty($selectedCourse))
                <p>Price: ${{ number_format( $selectedCourse->price, 2) }}</p>

                {{-- <div class="mb-4">
                    <input type="number" wire:model.lazy="payment" step=".01" class="lms-input" placeholder="Payment Now">
                </div> --}}

                @include('components.wire-loading-btn')
            @endif
        </form>

    @endif


</div>
