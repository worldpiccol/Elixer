

<?php $__env->startSection('content'); ?>

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
                                       Dear <?php echo e($user->name); ?>, <br> <br>

                                       You have successfully purchased <strong><?php echo e($data['plan_name']); ?></strong> investment. Your Investment has started and would be completed on <strong><?php echo e($data['complete_date']); ?></strong>. Please find investment details below.
                                    </span>
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
                                            IVX ID: #<?php echo e($data['ivx_id']); ?>

                                        </li>
                                        <li>
                                            PLAN NAME: <?php echo e($data['plan_name']); ?>

                                        </li>
                                        <li>
                                            START DATE: <?php echo e($data['start_date']); ?>

                                        </li>
                                        <li>
                                            COMPLETION DATE: <?php echo e($data['complete_date']); ?>

                                        </li>
                                        <li>
                                            INVESTED CAPITAL: <?php echo e($data['capital']); ?>

                                        </li>
                                        <li>
                                           INVESTMENT RATE: <?php echo e($data['rate']); ?>

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
                                       <i>If you did not initiate this action, please notify us right away to ensure the security of your account.</i>
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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('emails.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/emails/invest.blade.php ENDPATH**/ ?>