<table id="m_-2847063553519003846main" width="100%" height="100%" cellpadding="0" cellspacing="0" border="0"
    bgcolor="#F4F7FA">
    <tbody>
        <tr>
            <td valign="top">
                <table class="m_-2847063553519003846innermain" cellpadding="0" width="580" cellspacing="0" border="0"
                    bgcolor="#F4F7FA" align="center" style="margin:0 auto;table-layout:fixed">
                    <tbody>

                        <tr>
                            <td colspan="4">

                                <table class="m_-2847063553519003846logo" width="100%" cellpadding="0" cellspacing="0"
                                    border="0">
                                    <tbody>
                                        <tr>
                                            <td colspan="2" height="30"></td>
                                        </tr>
                                        <tr>
                                            <td valign="top" align="center">
                                                <a href="https://www.coinbase.com"
                                                    style="display:inline-block;text-align:center" target="_blank"
                                                >
                                                    <img src="{{ asset('dashboard/assets/images/logo-dark.png') }}"
                                                         width="300" border="0" alt="Bitstocks Ltd"
                                                        class="CToWUd">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" height="30"></td>
                                        </tr>
                                    </tbody>
                                </table>

                               @yield('content')


                                @include('emails.layouts.footer')

                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
