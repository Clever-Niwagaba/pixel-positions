<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs/create">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="3,500,000" />
        <x-forms.input label="Location" name="location" placeholder="Entebbe, Uganda" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://bnmg.com/jobs/producer-wanted" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="frontend, engineer, graphics" />
    
        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>