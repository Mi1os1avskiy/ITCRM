document.body.onload = function () {

    document.getElementById('test_btn').addEventListener("click", () => document.getElementById('test_block').classList.remove('translate-x-full'));

    //let links = ['{{ links.0 }}', '{{ links.1 }}', '{{ links.2 }}', '{{ links.3 }}', '{{ links.4 }}', '{{ links.5 }}', '{{ links.6 }}', '{{ links.7 }}', '{{ links.8 }}'];
    let links = ['overview', 'profile', 'services', 'invoices', 'tickets', 'credits', 'emails', 'notes', 'log'];

    links.forEach(function(link) {
        document.getElementById(link + '_link').addEventListener('click', function () {
            document.getElementById(link).classList.remove('hidden');
            links.forEach(function (i) {
                if (i !== link) {
                    document.getElementById(i).classList.add('hidden');
                }
            });
        });
    });

    document.getElementById('qactions').addEventListener("click", () => document.querySelector('[role="menu"]').classList.toggle('hidden'));

    document.getElementById('email_btn').addEventListener("click", () => document.querySelector('[role="listbox"]').classList.toggle('hidden'));

    document.getElementById('2fa').addEventListener("click", () => document.getElementById('2fa_modal').classList.remove('hidden'));
    document.querySelector('[data-pos="2fa_cancel"]').addEventListener("click", () => document.getElementById('2fa_modal').classList.add('hidden'));
    document.querySelector('[data-pos="2fa_disable"]').addEventListener("click", function () {
        document.getElementById('2fa_modal').classList.add('hidden');
        document.getElementById('2fa_notification').classList.remove('hidden');
        setTimeout(() => { document.getElementById('2fa_notification').classList.add('hidden'); }, 3000);
    });
    document.getElementById('2fa_notification_close').addEventListener("click", () => document.getElementById('2fa_notification').classList.add('hidden'));

    document.getElementById('password').addEventListener("click", () => document.getElementById('password_modal').classList.remove('hidden'));
    document.querySelector('[data-pos="password_cancel"]').addEventListener("click", () => document.getElementById('password_modal').classList.add('hidden'));

    document.querySelector('[data-pos="password_change"]').addEventListener("click", function () {
        document.getElementById('password_modal').classList.add('hidden');
        document.getElementById('password_notification').classList.remove('hidden');
        setTimeout(() => { document.getElementById('password_notification').classList.add('hidden'); }, 3000);
    });
    document.getElementById('password_notification_close').addEventListener("click", () => document.getElementById('password_notification').classList.add('hidden'));

    document.getElementById('invoices_filterbtn').addEventListener("click", () => document.getElementById('invoices_filters').classList.remove('hidden'));
    document.getElementById('close_filters').addEventListener("click", () => document.getElementById('invoices_filters').classList.add('hidden'));

    document.getElementById('tickets_filterbtn').addEventListener("click", () => document.getElementById('tickets_filters').classList.remove('hidden'));
    document.getElementById('close_filters_tickets').addEventListener("click", () => document.getElementById('tickets_filters').classList.add('hidden'));

    document.getElementById('add_credits').addEventListener("click", () => document.getElementById('add_credits_modal').classList.remove('hidden'));
    document.getElementById('add_credits_cancel_btn').addEventListener("click", () => document.getElementById('add_credits_modal').classList.add('hidden'));

    document.getElementById('remove_credits').addEventListener("click", () => document.getElementById('remove_credits_modal').classList.remove('hidden'));
    document.getElementById('remove_credits_cancel_btn').addEventListener("click", () => document.getElementById('remove_credits_modal').classList.add('hidden'));

    document.getElementById('add_note_btn').addEventListener("click", () => document.getElementById('add_note_modal').classList.remove('hidden'));
    document.getElementById('add_note_cancel_btn').addEventListener("click", () => document.getElementById('add_note_modal').classList.add('hidden'));
}