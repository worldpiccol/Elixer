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
                                       Investment Plan Purchased
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
                                       Dear Admin, <br> <br>

                                       A user with name <strong> {{ $user->name }} </strong> has purchased the investment paln <strong>{{ $data['plan_name'] }}</strong>. The investment paln has started successfully.
                                </td>
                            </tr>

                            <tr>
                                <td height="24"></td>
                            </tr>

                            <tr>
                                <td align="left"
                                    style="color:#48545d;font-size:14px;line-height:24px;font-weight:bold">
                                    <ul
                                        style="list-style:none;padding-left:0;margin-top:0;margin-bottom:0">
                                        <li>
                                            IVX ID: #{{ $data['ivx_id'] }}
                                        </li>
                                        <li>
                                            PLAN NAME: {{ $data['plan_name'] }}
                                        </li>
                                        <li>
                                            START DATE: {{ $data['start_date'] }}
                                        </li>
                                        <li>
                                            COMPLETION DATE: {{ $data['complete_date'] }}
                                        </li>
                                        <li>
                                            INVESTED CAPITAL: {{ $data['capital'] }}
                                        </li>
                                        <li>
                                           INVESTMENT RATE: {{ $data['rate'] }}
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td height="20"></td>
                            </tr>

                            <tr>
                                <td align="left">
                                    <p
                                        style="color:#48545d;font-size:14px;line-height:24px">
                                       <i>This is an automated mail, please do not reply.</i>
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
