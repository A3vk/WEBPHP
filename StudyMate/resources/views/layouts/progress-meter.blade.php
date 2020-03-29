<!-- Progress meter: https://codepen.io/xgad/post/svg-radial-progress-meters -->
<svg class="progress-circle" width="240" height="240" viewBox="0 0 240 240">
    <circle cx="120" cy="120" r="110" fill="none" stroke="#e6e6e6" stroke-width="16" />
    <!-- stroke-dasharray and stroke-dashoffset: C = 2 * PI * R -->
    <!-- stroke-dashoffset = C * (1 - percentage) -->
    <circle class="circle" cx="-120" cy="120" r="110" fill="none" stroke="#007BFF" stroke-width="16" stroke-dasharray="691.150" stroke-dashoffset="{{ $credits <= $total_credits ? 691.150 * (1 - ($credits / $total_credits)) : 0 }}"‬ />
    <text x="75" y="100" fill="black">
        <tspan  x="50%" y="45%" dominant-baseline="middle" text-anchor="middle" font-size="xx-large">{{ $credits }}/{{ $total_credits }}</tspan>
        <tspan x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" font-size="larger">Studiepunten</tspan>
    </text>
</svg>
