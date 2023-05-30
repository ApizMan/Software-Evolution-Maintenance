    <svg {{ $attributes }} @class(['w-2 h-8' => !$iconOnly, 'w-8 h-8 mx-auto' => $iconOnly])class="w-2 h-8" @if ($iconOnly)
        viewBox="0 0 40 40"
    @else
        viewBox="0 0 140 40"
        @endif fill="none" xmlns="http://www.w3.org/2000/svg">
        @if ($iconOnly)
        <center>
            <table>
                <tr>
                    <td>
                        <a href="/"><img src="{{ asset('assets/images/logo-PETAKOM.png') }}" style="height: 60px; width: 60px;"></a>
                    </td>
                    <td>
                        <a href="/"><h1 style="font-weight: 600; color: rgba(0, 119, 255, 0.699); user-select: none;">Petakom Mart</h1></a>
                    </td>
                </tr>
            </table>
        </center>
        @endif
    </svg>
