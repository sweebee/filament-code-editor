<x-dynamic-component
        :component="$getFieldWrapperView()"
        :field="$field"
        :label-sr-only="$isLabelHidden()"
>

    <div
        x-data="codeEditorFormComponent({
            state: $wire.{{ $applyStateBindingModifiers('entangle(\'' . $getStatePath() . '\')') }},
        })"
    >
        <div
            wire:ignore
            class="w-full border rounded-lg overflow-hidden border-gray-300 dark:border-gray-600"
            x-ref="codeeditor"
            style="min-height: 150px;"
        ></div>
    </div>

    <style>
        .cm-gutters {
            min-height: 150px !important;
        }

        .cm-scroller {
            min-height: 150px !important;
        }

        .cm-gutters {
            min-height: 150px !important;
        }

        .dark .cm-gutters {
            background-color: #444;
        }
        .dark .cm-activeLine {
            background-color: #444;
            border-color: #666;
        }
    </style>

</x-dynamic-component>
