<style>
    *{
          -webkit-user-select: none; /* Safari */
          -ms-user-select: none; /* IE 10 and IE 11 */
          user-select: none; /* Standard syntax */
        }
        .van-tabbar-item--active img{
            filter: invert(1) !important;
        }
        
        .van-tabbar-item--active span{
            color: rgb(0, 208, 246) !important;
        }
</style>

<footer data-v-e7c42b8e="">
    <div data-v-e7c42b8e="" class="footer">
        <div data-v-e7c42b8e="" class="van-tabbar" replace="true">
            <div data-v-e7c42b8e="" class="van-tabbar-first van-tabbar-item @if(\Route::currentRouteName() == 'dashboard') van-tabbar-item--active @endif"
                 onclick="window.location.href='{{url('dashboard')}}'"
                 style="color: rgb(0, 208, 246);">
                <div class="van-tabbar-item__icon"><img data-v-e7c42b8e=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAAAnCAYAAACMo1E1AAAAAXNSR0IArs4c6QAAA0VJREFUWEft2F1IU2EYB/D//50TlT6JQkokKCqigsCEEJIgMs0iENEo1KTooog+XGVuejAwQuoi1FQUEYrC7KIuoiBCyMgIgiiQiLoxE0WIICvN+cTZnPPocTt+bPNCbwZevPvt/7xfz0vM0Z/cLa8EbbmguKFYx5ySa7MdmrMdQFq0aAzZ2kHsAAnoI3o+eQ+dQ0epaSMz/Y5Z4aTx+mLYB19Bcasf5cMBUHzJ7Cu7wo6TJi0eSumJrYMan5gBpyfZgt/2QuY5BqaLnFFy0qStBfkaZLwnscA4vcSfmVW8IeQ4aby6EWqkA8SysTkWHAcoeYY4exbTrCc4reSkQUuGQhvIWMMcs4LzLpRvsMs2Zhb/sJKiZZw0uFJAz6ocXY2T5pa1/yu8R4wtxUqClnDSUHoA4GPjVjFDnC9BG/Yy81JnoASD4qS+NAtkq2livn3NelnH7YPogxrZFKjEAXFS68qDUs1emEk5Z4cDKN0Q5PLg5XazBKfESa3rPMgb/lKGAjc6pt2WyLQLXROBpjipcZ6CUlXGtEKII/pB5jDD8WI8cBJOalyVIIomT/6Q4nzncTLTi976gAac3Ha6ICw3n1/hwGEQRCb3OZ7rwDGcVDvvgDziUZtO/rDgvKEpZjOtqNWDk2pnPYATnlLOB5x3F8igVJU0gSzwouYRTudIlVPGijv/cK7joJwB8AnkTgBrIjrnRHqhVA+IvxNWq6sLgoSI4oAvTHesN65WTYvCKncfgOURxYn0MuNivBF381wsYhbpR8iKiOKAHsQMJHK3Nuzf5xZwExshk419IblAXdlY8x2e5D6C+AMyCoQAHIZCPBQTA15Szc7wOSur4leIyme+c9JNVkSI1orTIG9N2XuEFAcUsqCsKVCTIg8quqG42vL2NGfJEYeYX/YoIK614h3I7eHHKR5mXun9ILgPILcs4CY8QywkB6nT4uB2dwP665FZv2D6RhKK5PqwckkCk07+8x/8+vNpv/sngJgI437hzcBS/bnWeNmscbUBSLWMIwqYX9YcZLV2gbR+gQWeMN2x33Cf83RhtSVJGFFPQUT7d3U12ir6WsZx5QWOsaDsYRBcB8jNFn/wd9jtqdxztlcf8z9E80JTYBr+UwAAAABJRU5ErkJggg=="
                                                        class="active"><!----></div>
                <div class="van-tabbar-item__text"><span data-v-e7c42b8e="">Home</span></div>
            </div>
            <div data-v-e7c42b8e="" class="van-tabbar-last van-tabbar-item @if(\Route::currentRouteName() == 'ordered') van-tabbar-item--active @endif" style="color: rgb(183, 183, 183);"
                 onclick="window.location.href='{{route('ordered')}}'">
                <div class="van-tabbar-item__icon"><img data-v-e7c42b8e=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAAAnCAYAAACMo1E1AAAAAXNSR0IArs4c6QAAA65JREFUWEftWM+LHFUQ/urt9F1diUIIEZJcctD8AWqMICw7XW+YowcjaEz8GVQiiUZNYhIS1ItoNMsqKHqehX5vlj2ou+v+ASqCFyNKUCRqEs/u9Ct5TfcwE3rX/oWMkLrM0F31va9f1atXVYRUoig6RERHAOzMnm3y+zsRzYdh+OpmutbaMyLyBIAtBTAvicjbWuu5TJf8H2PM+wCeKgAwpiIiX2mt9+bZGWNWAOS++5d1PmDmp70OWWsfFZGPyxIbfh3RXBiGT47aR1E0R0QHq2KKyH6t9adkjLkO4JaqQN5ORLZrrS/7/wsLC3e1Wq2f6uABuB4EwU5PTmoCgYgOh2H4rseJougwEb3TAObDjZADcI6ZX0nj9xyAYw2QO9IIOSI6m53cKIrOElFCtI6IyIuNkBOR01rr19OdOw1g0xRTkPTzN8kV3Kkb1ZrZOQBnmPk1j57eCscrEhqaEdELjbgVwHlmfjlNJeeJ6GhdciLyUlPkjjLzmym5Y0Tk00ktEZEDntwAwFQdJKXU3e12+7v0tN4D4Js6eAAGSqnkhjgJ4EQNsM+Z+aFRe2PMFwAerIopIie01m8kVUkURatEdH9ZMBH5LY7j3d1u969RW2vtrSLyPYA7y2ICWGXmB7xdQi51x3sAnikBZgA8xsx/5tn0er0tQRB8CIBLYF5g5mcz/SE5/2BxcXHHYDDYp5TalheHzjmnlPrD13HM/G2RRfv9/p44jr1XbldKqRyb2Dl3udVqrczOzv44+n6MXJHF/kud/w85Y8wuItoHYOtGbiWiq0qp1Xa7XShdeLc65/aKyPRGbhWRX5xzy51O51KuWyv0EX3n3OOdTufKJgfiIwBhiVC4yMzDXiZrcNYA3FsCJFO9EgTB7pmZmWujtktLS7etr6/7VHJHBcw1Zk7Smm9wTolIUotVlGVmHku4xpgvAfjwqCqnmPmkvyFiAHlHvAzwniy1pDH2dRnjvPSilNox8Rd/7e5r0kumyS02bzY4VU/YRO/cRDfVEz2OAPAcM/titfFBTqMjsH6/v90593PV+E3trgVBsMvfEPsBfFIDbKyS8DjW2osicqgqJhE9EobhZ0lVYq29ICLJqLOkrDBz7gVvjFkGkDQqJWXYRwwrYWvtQd9lFxxY+xpuPhtBbLS4McZPnA4U7MJ+APAWM89neGNleq/Xm261Wv5rtyqlAt/QZIppFeubkatxHK91u91CceXHsFNTU/cppaZ9dZ2D+TeAX32Dc2Nd+A9axveJMnZRZgAAAABJRU5ErkJggg=="
                                                        class="normal"><!----></div>
                <div class="van-tabbar-item__text"><span data-v-e7c42b8e="">Earnings</span></div>
            </div>
            <div data-v-e7c42b8e="" class="van-tabbar-center van-tabbar-item  @if(\Route::currentRouteName() == 'user.team') van-tabbar-item--active @endif"
                 onclick="window.location.href='{{route('user.team')}}'"
                 style="color: rgb(183, 183, 183);">
                <div class="van-tabbar-item__icon"><img data-v-e7c42b8e=""
                                                        src="data:image/png;base64,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"
                                                        class="normal"><!----></div>
                <div class="van-tabbar-item__text"><span data-v-e7c42b8e="">Team</span></div>
            </div>
            <div data-v-e7c42b8e="" class="van-tabbar-last van-tabbar-item @if(\Route::currentRouteName() == 'profile') van-tabbar-item--active @endif" style="color: rgb(183, 183, 183);"
                 onclick="window.location.href='{{route('profile')}}'">
                <div class="van-tabbar-item__icon"><img data-v-e7c42b8e=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAnCAYAAACFSPFPAAAAAXNSR0IArs4c6QAAArRJREFUWEfNmE1oE0EUx/9vzSE9+UWrWIqIXgQV8eBB6UXFj8jMBhFUUPCkgigepBU8GDwoKApiQUtBERQhImTebgXBkyhSMIg5Sw9FQaU3RbCw+2TDtlhok93JlHav+/6/+eVl9u0kBIurWq0u7+rq8kVkH4BNAFakGGmFE5ECET3RWt+Yq47yuIyOjq6PomgAwAkAK/Nk/6t9qrU+1ZGMMWY3Eb0BULSUmI7d11pftJYxxhwmIgNgWYciSdxehpl3AKg7kOi8M8w8BmDnossEQbBfRF47FLH/mpg52bB7F13GGLOGiL47FrHrTPoEhUtChpnPAnjoWoaIhpRSF3LNmSAIzovI0JKQMcYcIaKXCyBzSyk1mLczvSLydQFkTiqlnuWSSYqZ+TOAbS6FiKhbKTVpI+MDqDmUGdZan5uP1/YIwcwTAPocCAkR9czXlYTfViYMw/44jt92KkNEZ5RSI604bWXSvZOcP+51IFTVWh9rl88kkwqdBvC4HXCO+9e01tez5DLLJLAwDDfHcXwXwMEM8AaAq1rrzK+UXDLTAkEQlEVkD4CN6eZeLSK/Pc+bEJFxERnzff9RBuFZJVYyeRfJWr+0ZZh5g4gcJ6IDANYC8ESk5e+hzJ+cyAMwSURjURQ9L5fLyZF25prVmfTY8CDL/Mkq0HKuEN2p1+sDlUolnjX0mPkVgEMuFsnJ+FIoFLaUSqW/zc4w8xUAN3NCXJY3hyLVarU+z/PGARRc0i1Yipj5NoDLFmHXkQYZYz4R0XbXZAveVNKZHwB6LMKuI38SmZ8Aul2TLXi/EplvANZZhF1HpigIgvcisss12YLXlDkqIi8swk4jIjIyPfSSs8dWp/R8MImiaFVTJh18HwD05mM4q+7XWr+beVEm/2AWi8VhACVnS7QHNUTkku/7H5PSf7eR+nsgrCfLAAAAAElFTkSuQmCC"
                                                        class="normal"><!----></div>
                <div class="van-tabbar-item__text"><span data-v-e7c42b8e="">Mine</span></div>
            </div>
        </div>
    </div>
</footer>
