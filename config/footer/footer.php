
    <footer id="footer-pag" style="display: flex; justify-content: center; align-items: center; background-color: #e9ecef; width:100%; height: 4.3vh;">
        <h6>Desenvolvido por Matheus Augusto Guedes e Gustavo Cleber Pardim.</h6>
    </footer>
    </div>
</div>
</body>
<script>
    const hamBurger = document.querySelector(".toggle-btn");

    hamBurger.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("expand");
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>