            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Todos os direitos &copy; <?=date('Y');?></span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Já vai?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Clique no botão "SAIR" abaixo para deslogar.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCELAR</button>
                <a class="btn btn-primary" href="<?=base_url('login/logout')?>">SAIR</a>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
<script src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.easing.min.js')?>"></script>
<script src="<?=base_url('assets/js/sb-admin-2.min.js')?>"></script>
</body>
</html>