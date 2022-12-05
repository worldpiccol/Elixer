@extends('emails.layouts.master')

@section('content')

    <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff" style="border-radius:4px">
        <tbody>

            <tr>
                <td height="40"></td>
            </tr>
            <tr
                style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;color:#4e5c6e;font-size:14px;line-height:20px;margin-top:20px">
                <td class="m_-2847063553519003846content" colspan="2" valign="top"
                    align="center" style="padding-left:90px;padding-right:90px">

                    <table width="100%" cellpadding="0" cellspacing="0" border="0"
                        bgcolor="#ffffff">
                        <tbody>

                            <tr>
                                <td height="30"></td>
                            </tr>

                            <tr>
                                <td align="center">
                                    <span
                                        style="color:#48545d;font-size:22px;line-height:24px">
                                        Withdrawal Confirmed
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td height="24"></td>
                            </tr>
                            <tr>
                                <td height="1" bgcolor="#DAE1E9"></td>
                            </tr>

                            <tr>
                                <td height="24"></td>
                            </tr>

                            <tr>
                                <td align="left">
                                    <span
                                        style="color:#48545d;font-size:14px;line-height:24px">
                                       Dear {{ $user->name }}, <br> <br>

                                       Your Withdrawal of <strong>{{ $data['amount'] }}</strong> to the wallet address <strong>{{ $data['wallet'] }}</strong> has successfully be been confirmed on <strong>{{ $data['time'] }}</strong>. Be patient while the transaction is confirmed on the blockchain.
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td height="20"></td>
                            </tr>

                            <tr>
                                <td align="left">
                                    <p
                                        style="color:#48545d;font-size:14px;line-height:24px">
                                     <i>If you did not initiate this withdrawal, please notify us right away to ensure the security of your account.</i>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td height="20"></td>
                            </tr>
                            <tr>
                                <td height="10">
                                    <p
                                        style="color:#48545d;font-size:14px;line-height:24px">
                                       Warm Regard. <br>
                                       <Strong>Bitstocks ltd.</Strong>
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td align="center">

                                </td>
                            </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
            <tr>
                <td height="60"></td>
            </tr>
        </tbody>
    </table>


@endsection
