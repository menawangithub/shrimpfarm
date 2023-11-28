<label class="list-group-item d-flex align-items-center">
    @php
        $todo = \App\Models\ListTodoTotalModel::where('id_todo_total', $todoTotalId)
            ->where('id_panen', $todo->id_panen)
            ->first();
        $isChecked = $todo && $todo->checked === 'on';
    @endphp

    <input class="form-check-input me-4" type="checkbox" name="checkboxes[{{ $todoTotalId }}]" {{ $isChecked ? 'checked' : '' }}>

    <div class="accordion accordion-without-arrow w-100">
        <div class="accordion-item card">
            <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconOne-{{ $index }}">
                <button
                    type="button"
                    class="accordion-button collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordionIcon-{{ $index }}"
                    aria-controls="accordionIcon-{{ $index }}"
                >
                    <strong>{{ $title }}</strong>
                </button>
            </h2>
            <div id="accordionIcon-{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#accordionIconOne-{{ $index }}">
                <div class="accordion-body">
                    {{ $accordionItem->content }}
                </div>
            </div>
        </div>
    </div>
</label>
