<div>
    @if (auth()->user()->role=='patient')
        <a href="{{ route('schedule-appointment') }}">Schedule Appointment</a>
    @endif
    <table class="table-auto">
        <thead>
          <tr>
            <th>{{ auth()->user()->role=='patient' ? 'Dr. Name' : 'Patient Name' }}</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($appointments as $appointment)
                <tr>
                    <td>{{ auth()->user()->role=='patient' ? $appointment->doctor->name : $appointment->patient->name  }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ $appointment->time }}</td>
                    <td>1961</td>
                </tr>
            @empty
                <p>No appointment</p>
            @endforelse
        </tbody>
      </table>
</div>
