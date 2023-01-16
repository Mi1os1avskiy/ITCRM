document.getElementById('aside_clients_btn').addEventListener("click", () => {
    document.getElementById('aside_clients_list').classList.toggle('hidden');
    document.getElementById('arrow_clients').classList.toggle('transform-none');
});

document.getElementById('aside_orders_btn').addEventListener("click", () => {
    document.getElementById('aside_orders_list').classList.toggle('hidden');
    document.getElementById('arrow_orders').classList.toggle('transform-none');
});
