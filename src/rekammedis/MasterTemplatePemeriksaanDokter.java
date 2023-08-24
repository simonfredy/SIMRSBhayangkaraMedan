package rekammedis;
import com.fasterxml.jackson.databind.JsonNode;
import com.fasterxml.jackson.databind.ObjectMapper;
import fungsi.WarnaTable;
import fungsi.WarnaTable2;
import fungsi.batasInput;
import fungsi.koneksiDB;
import fungsi.sekuel;
import fungsi.validasi;
import fungsi.akses;
import java.awt.Dimension;
import java.awt.event.KeyEvent;
import java.io.File;
import java.io.FileReader;
import java.io.FileWriter;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import javax.swing.JTable;
import javax.swing.event.DocumentEvent;
import javax.swing.table.DefaultTableModel;
import javax.swing.table.TableColumn;

public class MasterTemplatePemeriksaanDokter extends javax.swing.JDialog {
    private final DefaultTableModel tabMode,tabModeDiagnosa,tabModeProsedur,tabModeRadiologi,tabModePK,tabModeDetailPK,
                tabModePA,tabModeMB,tabModeDetailMB,tabModeObatUmum,tabModeObatRacikan,tabModeDetailObatRacikan,
                TabModeTindakan;
    private sekuel Sequel=new sekuel();
    private validasi Valid=new validasi();
    private Connection koneksi=koneksiDB.condb();
    private PreparedStatement ps,psprosedur,pspenyakit;
    private ResultSet rs;
    private int i,index=0,jml=0;
    private String[] kode,nama,ciripny,keterangan,kategori,cirium,kode2,panjang,pendek,satuan,nilairujukan;
    private boolean[] pilih;
    private WarnaTable2 warna=new WarnaTable2();
    private WarnaTable2 warna2=new WarnaTable2();
    private WarnaTable2 warna3=new WarnaTable2();
    private File file;
    private FileWriter fileWriter;
    private String iyem,la="",ld="",pa="",pd="";
    private ObjectMapper mapper = new ObjectMapper();
    private JsonNode root;
    private JsonNode response;
    private FileReader myObj;

    /** Creates new form DlgProgramStudi
     * @param parent
     * @param modal */
    public MasterTemplatePemeriksaanDokter(java.awt.Frame parent, boolean modal) {
        super(parent, modal);
        initComponents();

        Object[] row={"No.Template","Nama Pemeriksaan","Template Hasil Radiologi"};
        tabMode=new DefaultTableModel(null,row){
              @Override public boolean isCellEditable(int rowIndex, int colIndex){return false;}
        };
        tbDokter.setModel(tabMode);

        tbDokter.setPreferredScrollableViewportSize(new Dimension(800,800));
        tbDokter.setAutoResizeMode(JTable.AUTO_RESIZE_OFF);

        for (i = 0; i < 3; i++) {
            TableColumn column = tbDokter.getColumnModel().getColumn(i);
            if(i==0){
                column.setPreferredWidth(100);
            }else if(i==1){
                column.setPreferredWidth(200);
            }else if(i==2){
                column.setPreferredWidth(500);
            }
        }
        tbDokter.setDefaultRenderer(Object.class, new WarnaTable());
        
        tabModeDiagnosa=new DefaultTableModel(null,new Object[]{
            "P","Kode","Nama Penyakit","Ciri-ciri Penyakit","Keterangan","Ktg.Penyakit","Ciri-ciri Umum"}){
            @Override public boolean isCellEditable(int rowIndex, int colIndex){
                boolean a = false;
                if (colIndex==0) {
                    a=true;
                }
                return a;
             }
             Class[] types = new Class[] {
                java.lang.Boolean.class, java.lang.Object.class, java.lang.Object.class, java.lang.Object.class, 
                java.lang.Object.class, java.lang.Object.class, java.lang.Object.class
             };
             @Override
             public Class getColumnClass(int columnIndex) {
                return types [columnIndex];
             }
        };
        tbDiagnosa.setModel(tabModeDiagnosa);
        //tbPenyakit.setDefaultRenderer(Object.class, new WarnaTable(panelJudul.getBackground(),tbPenyakit.getBackground()));
        tbDiagnosa.setPreferredScrollableViewportSize(new Dimension(500,500));
        tbDiagnosa.setAutoResizeMode(JTable.AUTO_RESIZE_OFF);
        for (i= 0; i < 7; i++) {
            TableColumn column = tbDiagnosa.getColumnModel().getColumn(i);
            if(i==0){
                column.setPreferredWidth(20);
            }else if(i==1){
                column.setPreferredWidth(40);
            }else if(i==2){
                column.setPreferredWidth(280);
            }else if(i==3){
                column.setPreferredWidth(285);
            }else if(i==4){
                column.setPreferredWidth(75);
            }else if(i==5){
                column.setPreferredWidth(75);
            }else if(i==6){
                column.setPreferredWidth(75);
            }
        }
        tbDiagnosa.setDefaultRenderer(Object.class, new WarnaTable());
        
        tabModeProsedur=new DefaultTableModel(null,new Object[]{
            "P","Kode","Deskripsi Panjang","Deskripsi Pendek"}){
             @Override public boolean isCellEditable(int rowIndex, int colIndex){
                boolean a = false;
                if (colIndex==0) {
                    a=true;
                }
                return a;
             }
             Class[] types = new Class[] {
                java.lang.Boolean.class, java.lang.Object.class, java.lang.Object.class, java.lang.Object.class
             };
             @Override
             public Class getColumnClass(int columnIndex) {
                return types [columnIndex];
             }
        };
        tbProsedur.setModel(tabModeProsedur);
        //tbPenyakit.setDefaultRenderer(Object.class, new WarnaTable(panelJudul.getBackground(),tbPenyakit.getBackground()));
        tbProsedur.setPreferredScrollableViewportSize(new Dimension(500,500));
        tbProsedur.setAutoResizeMode(JTable.AUTO_RESIZE_OFF);

        for (i = 0; i < 4; i++) {
            TableColumn column = tbProsedur.getColumnModel().getColumn(i);
            if(i==0){
                column.setPreferredWidth(20);
            }else if(i==1){
                column.setPreferredWidth(50);
            }else if(i==2){
                column.setPreferredWidth(350);
            }else if(i==3){
                column.setPreferredWidth(350);
            }
        }
        tbProsedur.setDefaultRenderer(Object.class, new WarnaTable());
        
        tabModeRadiologi=new DefaultTableModel(null,new Object[]{"P","Kode Periksa","Nama Pemeriksaan"}){
              @Override public boolean isCellEditable(int rowIndex, int colIndex){
                boolean a = false;
                if (colIndex==0) {
                    a=true;
                }
                return a;
             }
             Class[] types = new Class[] {
                java.lang.Boolean.class, java.lang.Object.class, java.lang.Object.class
             };
             @Override
             public Class getColumnClass(int columnIndex) {
                return types [columnIndex];
             }
        };
        tbPermintaanRadiologi.setModel(tabModeRadiologi);        
        
        //tbObat.setDefaultRenderer(Object.class, new WarnaTable(panelJudul.getBackground(),tbObat.getBackground()));
        tbPermintaanRadiologi.setPreferredScrollableViewportSize(new Dimension(500,500));
        tbPermintaanRadiologi.setAutoResizeMode(JTable.AUTO_RESIZE_OFF);

        for(i = 0; i < 3; i++) {
            TableColumn column = tbPermintaanRadiologi.getColumnModel().getColumn(i);
            if(i==0){
                column.setPreferredWidth(20);
            }else if(i==1){
                column.setPreferredWidth(130);
            }else if(i==2){
                column.setPreferredWidth(480);
            }
        }
        tbPermintaanRadiologi.setDefaultRenderer(Object.class, new WarnaTable());
        
        tabModePK=new DefaultTableModel(null,new Object[]{"P","Kode Periksa","Nama Pemeriksaan"}){
              @Override public boolean isCellEditable(int rowIndex, int colIndex){
                boolean a = false;
                if (colIndex==0) {
                    a=true;
                }
                return a;
             }
             Class[] types = new Class[] {
                java.lang.Boolean.class, java.lang.Object.class, java.lang.Object.class
             };
             @Override
             public Class getColumnClass(int columnIndex) {
                return types [columnIndex];
             }
        };
        tbPermintaanPK.setModel(tabModePK);

        tbPermintaanPK.setPreferredScrollableViewportSize(new Dimension(500,500));
        tbPermintaanPK.setAutoResizeMode(JTable.AUTO_RESIZE_OFF);

        for(i = 0; i < 3; i++) {
            TableColumn column = tbPermintaanPK.getColumnModel().getColumn(i);
            if(i==0){
                column.setPreferredWidth(20);
            }else if(i==1){
                column.setPreferredWidth(100);
            }else if(i==2){
                column.setPreferredWidth(520);
            }
        }
        tbPermintaanPK.setDefaultRenderer(Object.class, new WarnaTable());
        
        tabModeDetailPK=new DefaultTableModel(null,new Object[]{"P","Pemeriksaan","Satuan","Nilai Rujukan","id_template"}){
             @Override public boolean isCellEditable(int rowIndex, int colIndex){
                    boolean a = false;
                    if (colIndex==0) {
                        a=true;
                    }
                    return a;
             }
             Class[] types = new Class[] {
                java.lang.Boolean.class,java.lang.Object.class,java.lang.Object.class,java.lang.Object.class,java.lang.Object.class
             };
             @Override
             public Class getColumnClass(int columnIndex) {
                return types [columnIndex];
             }              
        };
        
        tbDetailPK.setModel(tabModeDetailPK);
        //tampilPr();

        tbDetailPK.setPreferredScrollableViewportSize(new Dimension(500,500));
        tbDetailPK.setAutoResizeMode(JTable.AUTO_RESIZE_OFF);

        for (i = 0; i < 5; i++) {
            TableColumn column = tbDetailPK.getColumnModel().getColumn(i);
            if(i==0){
                column.setPreferredWidth(20);
            }else if(i==1){
                column.setPreferredWidth(356);
            }else if(i==2){
                column.setPreferredWidth(50);
            }else if(i==3){
                column.setPreferredWidth(345);
            }else if(i==4){
                column.setMinWidth(0);
                column.setMaxWidth(0);                
            }
        }
        
        tbDetailPK.setDefaultRenderer(Object.class, new WarnaTable());
        
        tabModePA=new DefaultTableModel(null,new Object[]{"P","Kode Periksa","Nama Pemeriksaan"}){
              @Override public boolean isCellEditable(int rowIndex, int colIndex){
                boolean a = false;
                if (colIndex==0) {
                    a=true;
                }
                return a;
             }
             Class[] types = new Class[] {
                java.lang.Boolean.class, java.lang.Object.class, java.lang.Object.class
             };
             @Override
             public Class getColumnClass(int columnIndex) {
                return types [columnIndex];
             }
        };
        tbPermintaanPA.setModel(tabModePA);

        tbPermintaanPA.setPreferredScrollableViewportSize(new Dimension(500,500));
        tbPermintaanPA.setAutoResizeMode(JTable.AUTO_RESIZE_OFF);

        for(i = 0; i < 3; i++) {
            TableColumn column = tbPermintaanPA.getColumnModel().getColumn(i);
            if(i==0){
                column.setPreferredWidth(20);
            }else if(i==1){
                column.setPreferredWidth(100);
            }else if(i==2){
                column.setPreferredWidth(652);
            }
        }
        tbPermintaanPA.setDefaultRenderer(Object.class, new WarnaTable());
        
        tabModeMB=new DefaultTableModel(null,new Object[]{"P","Kode Periksa","Nama Pemeriksaan"}){
              @Override public boolean isCellEditable(int rowIndex, int colIndex){
                boolean a = false;
                if (colIndex==0) {
                    a=true;
                }
                return a;
             }
             Class[] types = new Class[] {
                java.lang.Boolean.class, java.lang.Object.class, java.lang.Object.class
             };
             @Override
             public Class getColumnClass(int columnIndex) {
                return types [columnIndex];
             }
        };
        tbPermintaanMB.setModel(tabModeMB);

        tbPermintaanMB.setPreferredScrollableViewportSize(new Dimension(500,500));
        tbPermintaanMB.setAutoResizeMode(JTable.AUTO_RESIZE_OFF);
        for(i = 0; i < 3; i++) {
            TableColumn column = tbPermintaanMB.getColumnModel().getColumn(i);
            if(i==0){
                column.setPreferredWidth(20);
            }else if(i==1){
                column.setPreferredWidth(100);
            }else if(i==2){
                column.setPreferredWidth(520);
            }
        }
        tbPermintaanMB.setDefaultRenderer(Object.class, new WarnaTable());
        
        tabModeDetailMB=new DefaultTableModel(null,new Object[]{"P","Pemeriksaan","Satuan","Nilai Rujukan","id_template"}){
             @Override public boolean isCellEditable(int rowIndex, int colIndex){
                    boolean a = false;
                    if (colIndex==0) {
                        a=true;
                    }
                    return a;
             }
             Class[] types = new Class[] {
                java.lang.Boolean.class,java.lang.Object.class,java.lang.Object.class,java.lang.Object.class,java.lang.Object.class
             };
             @Override
             public Class getColumnClass(int columnIndex) {
                return types [columnIndex];
             }              
        };
        
        tbDetailMB.setModel(tabModeDetailMB);
        //tampilPr();

        tbDetailMB.setPreferredScrollableViewportSize(new Dimension(500,500));
        tbDetailMB.setAutoResizeMode(JTable.AUTO_RESIZE_OFF);

        for (i = 0; i < 5; i++) {
            TableColumn column = tbDetailMB.getColumnModel().getColumn(i);
            if(i==0){
                column.setPreferredWidth(20);
            }else if(i==1){
                column.setPreferredWidth(356);
            }else if(i==2){
                column.setMinWidth(0);
                column.setMaxWidth(0);  
            }else if(i==3){
                column.setPreferredWidth(345);
            }else if(i==4){
                column.setMinWidth(0);
                column.setMaxWidth(0);                
            }
        }
        tbDetailMB.setDefaultRenderer(Object.class, new WarnaTable());
        
        tabModeObatUmum=new DefaultTableModel(null,new Object[]{
                "K","Jumlah","Kode Barang","Nama Barang","Satuan","Komposisi",
                "Harga(Rp)","Jenis Obat","Aturan Pakai","I.F.","H.Beli","Stok"
            }){
            @Override public boolean isCellEditable(int rowIndex, int colIndex){
                boolean a = false;
                if ((colIndex==0)||(colIndex==1)||(colIndex==8)) {
                    a=true;
                }
                return a;
             }
             Class[] types = new Class[] {
                java.lang.Boolean.class, java.lang.Object.class, java.lang.Object.class, java.lang.Object.class, 
                java.lang.Object.class, java.lang.Object.class, java.lang.Double.class, java.lang.Object.class, 
                java.lang.Object.class,java.lang.Object.class,java.lang.Double.class,java.lang.Double.class
             };
             /*Class[] types = new Class[] {
                java.lang.Boolean.class, java.lang.Object.class, java.lang.Object.class, java.lang.Object.class
             };*/
             @Override
             public Class getColumnClass(int columnIndex) {
                return types [columnIndex];
             }
        };
        tbResep.setModel(tabModeObatUmum);
        //tbPenyakit.setDefaultRenderer(Object.class, new WarnaTable(panelJudul.getBackground(),tbPenyakit.getBackground()));
        tbResep.setPreferredScrollableViewportSize(new Dimension(500,500));
        tbResep.setAutoResizeMode(JTable.AUTO_RESIZE_OFF);
        for (i = 0; i < 12; i++) {
            TableColumn column = tbResep.getColumnModel().getColumn(i);
            if(i==0){
                column.setPreferredWidth(20);
            }else if(i==1){
                column.setPreferredWidth(45);
            }else if(i==2){
                column.setPreferredWidth(70);
            }else if(i==3){
                column.setPreferredWidth(240);
            }else if(i==4){
                column.setPreferredWidth(75);
            }else if(i==5){
                column.setPreferredWidth(110);
            }else if(i==6){
                column.setPreferredWidth(85);
            }else if(i==7){
                column.setPreferredWidth(110);
            }else if(i==8){
                column.setPreferredWidth(130);
            }else if(i==9){
                column.setPreferredWidth(100);
            }else if(i==10){
                column.setMinWidth(0);
                column.setMaxWidth(0);
            }else if(i==11){
                column.setPreferredWidth(50);
            }                 
        }
        warna.kolom=1;
        tbResep.setDefaultRenderer(Object.class,warna);
        
        tabModeObatRacikan=new DefaultTableModel(null,new Object[]{
                "No","Nama Racikan","Kode Racik","Metode Racik","Jml.Racik",
                "Aturan Pakai","Keterangan"
            }){
             @Override public boolean isCellEditable(int rowIndex, int colIndex){
                boolean a = true;
                if ((colIndex==0)||(colIndex==2)||(colIndex==3)) {
                    a=false;
                }
                return a;
             }
             Class[] types = new Class[] {
                java.lang.Object.class, java.lang.Object.class, java.lang.Object.class, java.lang.Object.class, 
                java.lang.Object.class, java.lang.Object.class, java.lang.Object.class
             };
             @Override
             public Class getColumnClass(int columnIndex) {
                return types [columnIndex];
             }
        };

        tbObatRacikan.setModel(tabModeObatRacikan);
        tbObatRacikan.setPreferredScrollableViewportSize(new Dimension(500,500));
        tbObatRacikan.setAutoResizeMode(JTable.AUTO_RESIZE_OFF);        
        
        for (i = 0; i < 7; i++) {
            TableColumn column = tbObatRacikan.getColumnModel().getColumn(i);
            if(i==0){
                column.setPreferredWidth(25);
            }else if(i==1){
                column.setPreferredWidth(250);
            }else if(i==2){
                column.setMinWidth(0);
                column.setMaxWidth(0);
            }else if(i==3){
                column.setPreferredWidth(100);
            }else if(i==4){
                column.setPreferredWidth(60);
            }else if(i==5){
                column.setPreferredWidth(200);
            }else if(i==6){
                column.setPreferredWidth(250);
            }
        }

        warna2.kolom=4;
        tbObatRacikan.setDefaultRenderer(Object.class,warna2);
        
        tabModeDetailObatRacikan=new DefaultTableModel(null,new Object[]{
                "No","Kode Barang","Nama Barang","Satuan","Harga(Rp)","H.Beli",
                "Jenis Obat","Stok","Kps","P1","/","P2","Kandungan","Jml","I.F.",
                "Komposisi"
            }){
             @Override public boolean isCellEditable(int rowIndex, int colIndex){
                boolean a = false;
                if ((colIndex==9)||(colIndex==11)||(colIndex==12)||(colIndex==13)) {
                    a=true;
                }
                return a;
             }             
             Class[] types = new Class[] {
                java.lang.Object.class,java.lang.Object.class,java.lang.Object.class,
                java.lang.Object.class,java.lang.Double.class,java.lang.Double.class,
                java.lang.Object.class,java.lang.Double.class,java.lang.Double.class,
                java.lang.Double.class,java.lang.Object.class,java.lang.Double.class,
                java.lang.Object.class,java.lang.Double.class,java.lang.Object.class,
                java.lang.Object.class
             };
             @Override
             public Class getColumnClass(int columnIndex) {
                return types [columnIndex];
             }
        };

        tbDetailObatRacikan.setModel(tabModeDetailObatRacikan);
        tbDetailObatRacikan.setPreferredScrollableViewportSize(new Dimension(500,500));
        tbDetailObatRacikan.setAutoResizeMode(JTable.AUTO_RESIZE_OFF);        
        
        for (i = 0; i < 16; i++) {
            TableColumn column = tbDetailObatRacikan.getColumnModel().getColumn(i);
            if(i==0){
                column.setPreferredWidth(25);
            }else if(i==1){
                column.setPreferredWidth(75);
            }else if(i==2){
                column.setPreferredWidth(240);
            }else if(i==3){
                column.setPreferredWidth(45);
            }else if(i==4){
                column.setPreferredWidth(85);
            }else if(i==5){
                column.setMinWidth(0);
                column.setMaxWidth(0);
            }else if(i==6){
                column.setPreferredWidth(110);
            }else if(i==7){
                column.setPreferredWidth(50);
            }else if(i==8){
                column.setPreferredWidth(40);
            }else if(i==9){
                column.setPreferredWidth(25);
            }else if(i==10){
                column.setMinWidth(11);
                column.setMaxWidth(11);
            }else if(i==11){
                column.setPreferredWidth(25);
            }else if(i==12){
                column.setPreferredWidth(60);
            }else if(i==13){
                column.setPreferredWidth(40);
            }else if(i==14){
                column.setPreferredWidth(100);
            }else if(i==15){
                column.setPreferredWidth(150);
            }
        }

        warna3.kolom=9;
        tbDetailObatRacikan.setDefaultRenderer(Object.class,warna3);
        
        TabModeTindakan=new DefaultTableModel(null,new Object[]{
            "P","Kode","Nama Perawatan","Kategori Perawatan","Tarif/Biaya","Bagian RS","BHP","JM Dokter","JM Perawat","KSO","Menejemen"}){
             @Override public boolean isCellEditable(int rowIndex, int colIndex){
                boolean a = false;
                if (colIndex==0) {
                    a=true;
                }
                return a;
             }
             Class[] types = new Class[] {
                java.lang.Boolean.class, java.lang.Object.class, java.lang.Object.class,  
                java.lang.Object.class,java.lang.Double.class,java.lang.Double.class,
                java.lang.Double.class,java.lang.Double.class,java.lang.Double.class,
                java.lang.Double.class,java.lang.Double.class
             };
             /*Class[] types = new Class[] {
                java.lang.Boolean.class, java.lang.Object.class, java.lang.Object.class, java.lang.Object.class
             };*/
             @Override
             public Class getColumnClass(int columnIndex) {
                return types [columnIndex];
             }
        };
        tbTindakan.setModel(TabModeTindakan);
        tbTindakan.setPreferredScrollableViewportSize(new Dimension(500,500));
        tbTindakan.setAutoResizeMode(JTable.AUTO_RESIZE_OFF);
        for (i = 0; i < 11; i++) {
            TableColumn column = tbTindakan.getColumnModel().getColumn(i);
            if(i==0){
                column.setPreferredWidth(20);
            }else if(i==1){
                column.setPreferredWidth(90);
            }else if(i==2){
                column.setPreferredWidth(420);
            }else if(i==3){
                column.setPreferredWidth(150);
            }else if(i==5){
                column.setMinWidth(0);
                column.setMaxWidth(0);
            }else if(i==6){
                column.setMinWidth(0);
                column.setMaxWidth(0);
            }else if(i==7){
                column.setMinWidth(0);
                column.setMaxWidth(0);
            }else if(i==8){
                column.setMinWidth(0);
                column.setMaxWidth(0);
            }else if(i==9){
                column.setMinWidth(0);
                column.setMaxWidth(0);
            }else if(i==10){
                column.setMinWidth(0);
                column.setMaxWidth(0);
            }else{
                column.setPreferredWidth(90);
            }
        }
        tbTindakan.setDefaultRenderer(Object.class, new WarnaTable());

        Kd.setDocument(new batasInput((byte)5).getKata(Kd));
        //Nm.setDocument(new batasInput((byte)50).getKata(Nm));      
        Subjek.setDocument(new batasInput((int)5000).getKata(Subjek));  
        TCari.setDocument(new batasInput((byte)100).getKata(TCari));    
        if(koneksiDB.CARICEPAT().equals("aktif")){
            TCari.getDocument().addDocumentListener(new javax.swing.event.DocumentListener(){
                @Override
                public void insertUpdate(DocumentEvent e) {
                    if(TCari.getText().length()>2){
                        tampil();
                    }
                }
                @Override
                public void removeUpdate(DocumentEvent e) {
                    if(TCari.getText().length()>2){
                        tampil();
                    }
                }
                @Override
                public void changedUpdate(DocumentEvent e) {
                    if(TCari.getText().length()>2){
                        tampil();
                    }
                }
            });
        }             
    }

    /** This method is called from within the constructor to
     * initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is
     * always regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        internalFrame1 = new widget.InternalFrame();
        TabRawat = new javax.swing.JTabbedPane();
        internalFrame2 = new widget.InternalFrame();
        scrollInput = new widget.ScrollPane();
        FormInput = new widget.PanelBiasa();
        label12 = new widget.Label();
        Kd = new widget.TextBox();
        jLabel40 = new widget.Label();
        scrollPane2 = new widget.ScrollPane();
        Subjek = new widget.TextArea();
        label14 = new widget.Label();
        KdDokter = new widget.TextBox();
        NmDokter = new widget.TextBox();
        BtnDokter = new widget.Button();
        jLabel41 = new widget.Label();
        scrollPane3 = new widget.ScrollPane();
        Objek = new widget.TextArea();
        jLabel42 = new widget.Label();
        scrollPane4 = new widget.ScrollPane();
        Template2 = new widget.TextArea();
        jLabel43 = new widget.Label();
        scrollPane5 = new widget.ScrollPane();
        Template3 = new widget.TextArea();
        jLabel44 = new widget.Label();
        scrollPane6 = new widget.ScrollPane();
        Template4 = new widget.TextArea();
        jLabel45 = new widget.Label();
        scrollPane7 = new widget.ScrollPane();
        Template5 = new widget.TextArea();
        Scroll1 = new widget.ScrollPane();
        tbDiagnosa = new widget.Table();
        BtnCariPenyakit = new widget.Button();
        Diagnosa = new widget.TextBox();
        jLabel13 = new widget.Label();
        jLabel14 = new widget.Label();
        Prosedur = new widget.TextBox();
        BtnCariProsedur = new widget.Button();
        Scroll2 = new widget.ScrollPane();
        tbProsedur = new widget.Table();
        BtnCariRadiologi = new widget.Button();
        Scroll3 = new widget.ScrollPane();
        tbPermintaanRadiologi = new widget.Table();
        CariRadiologi = new widget.TextBox();
        jLabel15 = new widget.Label();
        jLabel16 = new widget.Label();
        CariPK = new widget.TextBox();
        BtnCariLaboratoriumPK = new widget.Button();
        Scroll4 = new widget.ScrollPane();
        tbPermintaanPK = new widget.Table();
        Scroll5 = new widget.ScrollPane();
        tbDetailPK = new widget.Table();
        CariDetailPK = new widget.TextBox();
        BtnDetailLaboratPK = new widget.Button();
        jLabel17 = new widget.Label();
        CariPA = new widget.TextBox();
        BtnCariPA = new widget.Button();
        Scroll6 = new widget.ScrollPane();
        tbPermintaanPA = new widget.Table();
        jLabel18 = new widget.Label();
        CariMB = new widget.TextBox();
        BtnCariMB = new widget.Button();
        Scroll7 = new widget.ScrollPane();
        tbPermintaanMB = new widget.Table();
        CariDetailMB = new widget.TextBox();
        BtnCariDetailMB = new widget.Button();
        Scroll8 = new widget.ScrollPane();
        tbDetailMB = new widget.Table();
        jLabel19 = new widget.Label();
        BtnCariObatNonRacikan = new widget.Button();
        CariObatNonRacikan = new widget.TextBox();
        Scroll9 = new widget.ScrollPane();
        tbResep = new widget.Table();
        jLabel20 = new widget.Label();
        Scroll10 = new widget.ScrollPane();
        tbObatRacikan = new widget.Table();
        CariObatRacikan = new widget.TextBox();
        BtnCariObatRacikan = new widget.Button();
        Scroll11 = new widget.ScrollPane();
        tbDetailObatRacikan = new widget.Table();
        jLabel21 = new widget.Label();
        CariTindakan = new widget.TextBox();
        BtnCariTindakan = new widget.Button();
        Scroll12 = new widget.ScrollPane();
        tbTindakan = new widget.Table();
        BtnAllPenyakit = new widget.Button();
        BtnAllProsedur = new widget.Button();
        BtnAllRadiologi = new widget.Button();
        BtnAllPatologiKlinis = new widget.Button();
        BtnAllDetailLaboratPK = new widget.Button();
        BtnAllPA = new widget.Button();
        BtnAllMB = new widget.Button();
        BtnAllDetailMB = new widget.Button();
        BtnAllObatNonRacikan = new widget.Button();
        BtnAllObatRacikan = new widget.Button();
        BtnAllTindakan = new widget.Button();
        internalFrame3 = new widget.InternalFrame();
        Scroll = new widget.ScrollPane();
        tbDokter = new widget.Table();
        panelGlass9 = new widget.panelisi();
        label9 = new widget.Label();
        TCari = new widget.TextBox();
        BtnCari = new widget.Button();
        BtnAll = new widget.Button();
        panelGlass8 = new widget.panelisi();
        BtnSimpan = new widget.Button();
        BtnBatal = new widget.Button();
        BtnHapus = new widget.Button();
        BtnEdit = new widget.Button();
        label10 = new widget.Label();
        LCount = new widget.Label();
        BtnKeluar = new widget.Button();

        setDefaultCloseOperation(javax.swing.WindowConstants.DISPOSE_ON_CLOSE);
        setUndecorated(true);
        setResizable(false);

        internalFrame1.setBorder(javax.swing.BorderFactory.createTitledBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(240, 245, 235)), "::[ Master Template Pemeriksaan Dokter ]::", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 11), new java.awt.Color(50, 50, 50))); // NOI18N
        internalFrame1.setName("internalFrame1"); // NOI18N
        internalFrame1.setLayout(new java.awt.BorderLayout(1, 1));

        TabRawat.setBackground(new java.awt.Color(254, 255, 254));
        TabRawat.setForeground(new java.awt.Color(50, 50, 50));
        TabRawat.setFont(new java.awt.Font("Tahoma", 0, 11)); // NOI18N
        TabRawat.setName("TabRawat"); // NOI18N
        TabRawat.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                TabRawatMouseClicked(evt);
            }
        });

        internalFrame2.setBorder(null);
        internalFrame2.setName("internalFrame2"); // NOI18N
        internalFrame2.setLayout(new java.awt.BorderLayout(1, 1));

        scrollInput.setName("scrollInput"); // NOI18N
        scrollInput.setPreferredSize(new java.awt.Dimension(102, 557));

        FormInput.setBackground(new java.awt.Color(255, 255, 255));
        FormInput.setBorder(null);
        FormInput.setName("FormInput"); // NOI18N
        FormInput.setPreferredSize(new java.awt.Dimension(700, 2966));
        FormInput.setLayout(null);

        label12.setText("No.Template :");
        label12.setName("label12"); // NOI18N
        label12.setPreferredSize(new java.awt.Dimension(75, 23));
        FormInput.add(label12);
        label12.setBounds(0, 10, 85, 23);

        Kd.setName("Kd"); // NOI18N
        Kd.setPreferredSize(new java.awt.Dimension(207, 23));
        Kd.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                KdKeyPressed(evt);
            }
        });
        FormInput.add(Kd);
        Kd.setBounds(89, 10, 120, 23);

        jLabel40.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        jLabel40.setText("Subjek :");
        jLabel40.setName("jLabel40"); // NOI18N
        FormInput.add(jLabel40);
        jLabel40.setBounds(16, 40, 410, 20);

        scrollPane2.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));
        scrollPane2.setName("scrollPane2"); // NOI18N

        Subjek.setBorder(javax.swing.BorderFactory.createEmptyBorder(1, 1, 1, 1));
        Subjek.setColumns(20);
        Subjek.setRows(7);
        Subjek.setName("Subjek"); // NOI18N
        Subjek.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                SubjekKeyPressed(evt);
            }
        });
        scrollPane2.setViewportView(Subjek);

        FormInput.add(scrollPane2);
        scrollPane2.setBounds(16, 60, 670, 73);

        label14.setText("Dokter :");
        label14.setName("label14"); // NOI18N
        label14.setPreferredSize(new java.awt.Dimension(70, 23));
        FormInput.add(label14);
        label14.setBounds(230, 10, 70, 23);

        KdDokter.setEditable(false);
        KdDokter.setName("KdDokter"); // NOI18N
        KdDokter.setPreferredSize(new java.awt.Dimension(80, 23));
        KdDokter.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                KdDokterKeyPressed(evt);
            }
        });
        FormInput.add(KdDokter);
        KdDokter.setBounds(304, 10, 110, 23);

        NmDokter.setEditable(false);
        NmDokter.setName("NmDokter"); // NOI18N
        NmDokter.setPreferredSize(new java.awt.Dimension(207, 23));
        FormInput.add(NmDokter);
        NmDokter.setBounds(416, 10, 240, 23);

        BtnDokter.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/190.png"))); // NOI18N
        BtnDokter.setMnemonic('2');
        BtnDokter.setToolTipText("Alt+2");
        BtnDokter.setName("BtnDokter"); // NOI18N
        BtnDokter.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnDokter.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnDokterActionPerformed(evt);
            }
        });
        BtnDokter.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                BtnDokterKeyPressed(evt);
            }
        });
        FormInput.add(BtnDokter);
        BtnDokter.setBounds(658, 10, 28, 23);

        jLabel41.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        jLabel41.setText("Objek :");
        jLabel41.setName("jLabel41"); // NOI18N
        FormInput.add(jLabel41);
        jLabel41.setBounds(16, 140, 410, 20);

        scrollPane3.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));
        scrollPane3.setName("scrollPane3"); // NOI18N

        Objek.setBorder(javax.swing.BorderFactory.createEmptyBorder(1, 1, 1, 1));
        Objek.setColumns(20);
        Objek.setRows(7);
        Objek.setName("Objek"); // NOI18N
        Objek.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                ObjekKeyPressed(evt);
            }
        });
        scrollPane3.setViewportView(Objek);

        FormInput.add(scrollPane3);
        scrollPane3.setBounds(16, 160, 670, 73);

        jLabel42.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        jLabel42.setText("Asesmen :");
        jLabel42.setName("jLabel42"); // NOI18N
        FormInput.add(jLabel42);
        jLabel42.setBounds(16, 240, 410, 20);

        scrollPane4.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));
        scrollPane4.setName("scrollPane4"); // NOI18N

        Template2.setBorder(javax.swing.BorderFactory.createEmptyBorder(1, 1, 1, 1));
        Template2.setColumns(20);
        Template2.setRows(7);
        Template2.setName("Template2"); // NOI18N
        Template2.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                Template2KeyPressed(evt);
            }
        });
        scrollPane4.setViewportView(Template2);

        FormInput.add(scrollPane4);
        scrollPane4.setBounds(16, 260, 670, 73);

        jLabel43.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        jLabel43.setText("Plan :");
        jLabel43.setName("jLabel43"); // NOI18N
        FormInput.add(jLabel43);
        jLabel43.setBounds(16, 340, 410, 20);

        scrollPane5.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));
        scrollPane5.setName("scrollPane5"); // NOI18N

        Template3.setBorder(javax.swing.BorderFactory.createEmptyBorder(1, 1, 1, 1));
        Template3.setColumns(20);
        Template3.setRows(7);
        Template3.setName("Template3"); // NOI18N
        Template3.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                Template3KeyPressed(evt);
            }
        });
        scrollPane5.setViewportView(Template3);

        FormInput.add(scrollPane5);
        scrollPane5.setBounds(16, 360, 670, 73);

        jLabel44.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        jLabel44.setText("Instruksi :");
        jLabel44.setName("jLabel44"); // NOI18N
        FormInput.add(jLabel44);
        jLabel44.setBounds(16, 440, 410, 20);

        scrollPane6.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));
        scrollPane6.setName("scrollPane6"); // NOI18N

        Template4.setBorder(javax.swing.BorderFactory.createEmptyBorder(1, 1, 1, 1));
        Template4.setColumns(20);
        Template4.setRows(7);
        Template4.setName("Template4"); // NOI18N
        Template4.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                Template4KeyPressed(evt);
            }
        });
        scrollPane6.setViewportView(Template4);

        FormInput.add(scrollPane6);
        scrollPane6.setBounds(16, 460, 670, 73);

        jLabel45.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        jLabel45.setText("Evaluasi :");
        jLabel45.setName("jLabel45"); // NOI18N
        FormInput.add(jLabel45);
        jLabel45.setBounds(16, 540, 410, 20);

        scrollPane7.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));
        scrollPane7.setName("scrollPane7"); // NOI18N

        Template5.setBorder(javax.swing.BorderFactory.createEmptyBorder(1, 1, 1, 1));
        Template5.setColumns(20);
        Template5.setRows(7);
        Template5.setName("Template5"); // NOI18N
        Template5.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                Template5KeyPressed(evt);
            }
        });
        scrollPane7.setViewportView(Template5);

        FormInput.add(scrollPane7);
        scrollPane7.setBounds(16, 560, 670, 73);

        Scroll1.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(240, 245, 235)));
        Scroll1.setName("Scroll1"); // NOI18N
        Scroll1.setOpaque(true);

        tbDiagnosa.setName("tbDiagnosa"); // NOI18N
        Scroll1.setViewportView(tbDiagnosa);

        FormInput.add(Scroll1);
        Scroll1.setBounds(16, 687, 670, 116);

        BtnCariPenyakit.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/accept.png"))); // NOI18N
        BtnCariPenyakit.setMnemonic('1');
        BtnCariPenyakit.setToolTipText("Alt+1");
        BtnCariPenyakit.setName("BtnCariPenyakit"); // NOI18N
        BtnCariPenyakit.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnCariPenyakit.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnCariPenyakitActionPerformed(evt);
            }
        });
        FormInput.add(BtnCariPenyakit);
        BtnCariPenyakit.setBounds(628, 660, 28, 23);

        Diagnosa.setHighlighter(null);
        Diagnosa.setName("Diagnosa"); // NOI18N
        Diagnosa.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                DiagnosaKeyPressed(evt);
            }
        });
        FormInput.add(Diagnosa);
        Diagnosa.setBounds(16, 660, 610, 23);

        jLabel13.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        jLabel13.setText("Diagnosa :");
        jLabel13.setName("jLabel13"); // NOI18N
        FormInput.add(jLabel13);
        jLabel13.setBounds(16, 640, 68, 23);

        jLabel14.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        jLabel14.setText("Prosedur :");
        jLabel14.setName("jLabel14"); // NOI18N
        FormInput.add(jLabel14);
        jLabel14.setBounds(16, 810, 68, 23);

        Prosedur.setHighlighter(null);
        Prosedur.setName("Prosedur"); // NOI18N
        Prosedur.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                ProsedurKeyPressed(evt);
            }
        });
        FormInput.add(Prosedur);
        Prosedur.setBounds(16, 830, 610, 23);

        BtnCariProsedur.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/accept.png"))); // NOI18N
        BtnCariProsedur.setMnemonic('1');
        BtnCariProsedur.setToolTipText("Alt+1");
        BtnCariProsedur.setName("BtnCariProsedur"); // NOI18N
        BtnCariProsedur.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnCariProsedur.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnCariProsedurActionPerformed(evt);
            }
        });
        FormInput.add(BtnCariProsedur);
        BtnCariProsedur.setBounds(628, 830, 28, 23);

        Scroll2.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(240, 245, 235)));
        Scroll2.setName("Scroll2"); // NOI18N
        Scroll2.setOpaque(true);

        tbProsedur.setName("tbProsedur"); // NOI18N
        Scroll2.setViewportView(tbProsedur);

        FormInput.add(Scroll2);
        Scroll2.setBounds(16, 857, 670, 116);

        BtnCariRadiologi.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/accept.png"))); // NOI18N
        BtnCariRadiologi.setMnemonic('1');
        BtnCariRadiologi.setToolTipText("Alt+1");
        BtnCariRadiologi.setName("BtnCariRadiologi"); // NOI18N
        BtnCariRadiologi.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnCariRadiologi.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnCariRadiologiActionPerformed(evt);
            }
        });
        FormInput.add(BtnCariRadiologi);
        BtnCariRadiologi.setBounds(628, 1000, 28, 23);

        Scroll3.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(240, 245, 235)));
        Scroll3.setName("Scroll3"); // NOI18N
        Scroll3.setOpaque(true);

        tbPermintaanRadiologi.setName("tbPermintaanRadiologi"); // NOI18N
        Scroll3.setViewportView(tbPermintaanRadiologi);

        FormInput.add(Scroll3);
        Scroll3.setBounds(16, 1027, 670, 116);

        CariRadiologi.setHighlighter(null);
        CariRadiologi.setName("CariRadiologi"); // NOI18N
        CariRadiologi.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                CariRadiologiKeyPressed(evt);
            }
        });
        FormInput.add(CariRadiologi);
        CariRadiologi.setBounds(16, 1000, 610, 23);

        jLabel15.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        jLabel15.setText("Permintaan Radiologi :");
        jLabel15.setName("jLabel15"); // NOI18N
        FormInput.add(jLabel15);
        jLabel15.setBounds(16, 980, 120, 23);

        jLabel16.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        jLabel16.setText("Permintaan Laborat Patologi Klinis :");
        jLabel16.setName("jLabel16"); // NOI18N
        FormInput.add(jLabel16);
        jLabel16.setBounds(16, 1150, 190, 23);

        CariPK.setHighlighter(null);
        CariPK.setName("CariPK"); // NOI18N
        CariPK.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                CariPKKeyPressed(evt);
            }
        });
        FormInput.add(CariPK);
        CariPK.setBounds(16, 1170, 610, 23);

        BtnCariLaboratoriumPK.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/accept.png"))); // NOI18N
        BtnCariLaboratoriumPK.setMnemonic('1');
        BtnCariLaboratoriumPK.setToolTipText("Alt+1");
        BtnCariLaboratoriumPK.setName("BtnCariLaboratoriumPK"); // NOI18N
        BtnCariLaboratoriumPK.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnCariLaboratoriumPK.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnCariLaboratoriumPKActionPerformed(evt);
            }
        });
        FormInput.add(BtnCariLaboratoriumPK);
        BtnCariLaboratoriumPK.setBounds(628, 1170, 28, 23);

        Scroll4.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(240, 245, 235)));
        Scroll4.setName("Scroll4"); // NOI18N
        Scroll4.setOpaque(true);

        tbPermintaanPK.setName("tbPermintaanPK"); // NOI18N
        tbPermintaanPK.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                tbPermintaanPKMouseClicked(evt);
            }
        });
        Scroll4.setViewportView(tbPermintaanPK);

        FormInput.add(Scroll4);
        Scroll4.setBounds(16, 1197, 670, 109);

        Scroll5.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(240, 245, 235)));
        Scroll5.setName("Scroll5"); // NOI18N
        Scroll5.setOpaque(true);

        tbDetailPK.setName("tbDetailPK"); // NOI18N
        Scroll5.setViewportView(tbDetailPK);

        FormInput.add(Scroll5);
        Scroll5.setBounds(16, 1337, 670, 216);

        CariDetailPK.setHighlighter(null);
        CariDetailPK.setName("CariDetailPK"); // NOI18N
        CariDetailPK.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                CariDetailPKKeyPressed(evt);
            }
        });
        FormInput.add(CariDetailPK);
        CariDetailPK.setBounds(16, 1310, 610, 23);

        BtnDetailLaboratPK.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/accept.png"))); // NOI18N
        BtnDetailLaboratPK.setMnemonic('1');
        BtnDetailLaboratPK.setToolTipText("Alt+1");
        BtnDetailLaboratPK.setName("BtnDetailLaboratPK"); // NOI18N
        BtnDetailLaboratPK.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnDetailLaboratPK.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnDetailLaboratPKActionPerformed(evt);
            }
        });
        FormInput.add(BtnDetailLaboratPK);
        BtnDetailLaboratPK.setBounds(628, 1310, 28, 23);

        jLabel17.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        jLabel17.setText("Permintaan Laborat Patologi Anatomi :");
        jLabel17.setName("jLabel17"); // NOI18N
        FormInput.add(jLabel17);
        jLabel17.setBounds(16, 1560, 250, 23);

        CariPA.setHighlighter(null);
        CariPA.setName("CariPA"); // NOI18N
        CariPA.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                CariPAKeyPressed(evt);
            }
        });
        FormInput.add(CariPA);
        CariPA.setBounds(16, 1580, 610, 23);

        BtnCariPA.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/accept.png"))); // NOI18N
        BtnCariPA.setMnemonic('1');
        BtnCariPA.setToolTipText("Alt+1");
        BtnCariPA.setName("BtnCariPA"); // NOI18N
        BtnCariPA.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnCariPA.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnCariPAActionPerformed(evt);
            }
        });
        FormInput.add(BtnCariPA);
        BtnCariPA.setBounds(628, 1580, 28, 23);

        Scroll6.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(240, 245, 235)));
        Scroll6.setName("Scroll6"); // NOI18N
        Scroll6.setOpaque(true);

        tbPermintaanPA.setName("tbPermintaanPA"); // NOI18N
        Scroll6.setViewportView(tbPermintaanPA);

        FormInput.add(Scroll6);
        Scroll6.setBounds(16, 1607, 670, 126);

        jLabel18.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        jLabel18.setText("Permintaan Laborat Mikrobiologi & Bio Molekuler :");
        jLabel18.setName("jLabel18"); // NOI18N
        FormInput.add(jLabel18);
        jLabel18.setBounds(16, 1740, 270, 23);

        CariMB.setHighlighter(null);
        CariMB.setName("CariMB"); // NOI18N
        CariMB.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                CariMBKeyPressed(evt);
            }
        });
        FormInput.add(CariMB);
        CariMB.setBounds(16, 1760, 610, 23);

        BtnCariMB.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/accept.png"))); // NOI18N
        BtnCariMB.setMnemonic('1');
        BtnCariMB.setToolTipText("Alt+1");
        BtnCariMB.setName("BtnCariMB"); // NOI18N
        BtnCariMB.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnCariMB.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnCariMBActionPerformed(evt);
            }
        });
        FormInput.add(BtnCariMB);
        BtnCariMB.setBounds(628, 1760, 28, 23);

        Scroll7.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(240, 245, 235)));
        Scroll7.setName("Scroll7"); // NOI18N
        Scroll7.setOpaque(true);

        tbPermintaanMB.setName("tbPermintaanMB"); // NOI18N
        Scroll7.setViewportView(tbPermintaanMB);

        FormInput.add(Scroll7);
        Scroll7.setBounds(16, 1787, 670, 109);

        CariDetailMB.setHighlighter(null);
        CariDetailMB.setName("CariDetailMB"); // NOI18N
        CariDetailMB.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                CariDetailMBKeyPressed(evt);
            }
        });
        FormInput.add(CariDetailMB);
        CariDetailMB.setBounds(16, 1900, 610, 23);

        BtnCariDetailMB.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/accept.png"))); // NOI18N
        BtnCariDetailMB.setMnemonic('1');
        BtnCariDetailMB.setToolTipText("Alt+1");
        BtnCariDetailMB.setName("BtnCariDetailMB"); // NOI18N
        BtnCariDetailMB.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnCariDetailMB.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnCariDetailMBActionPerformed(evt);
            }
        });
        FormInput.add(BtnCariDetailMB);
        BtnCariDetailMB.setBounds(628, 1900, 28, 23);

        Scroll8.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(240, 245, 235)));
        Scroll8.setName("Scroll8"); // NOI18N
        Scroll8.setOpaque(true);

        tbDetailMB.setName("tbDetailMB"); // NOI18N
        Scroll8.setViewportView(tbDetailMB);

        FormInput.add(Scroll8);
        Scroll8.setBounds(16, 1927, 670, 216);

        jLabel19.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        jLabel19.setText("Obat Non Racikan :");
        jLabel19.setName("jLabel19"); // NOI18N
        FormInput.add(jLabel19);
        jLabel19.setBounds(16, 2150, 270, 23);

        BtnCariObatNonRacikan.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/accept.png"))); // NOI18N
        BtnCariObatNonRacikan.setMnemonic('1');
        BtnCariObatNonRacikan.setToolTipText("Alt+1");
        BtnCariObatNonRacikan.setName("BtnCariObatNonRacikan"); // NOI18N
        BtnCariObatNonRacikan.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnCariObatNonRacikan.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnCariObatNonRacikanActionPerformed(evt);
            }
        });
        FormInput.add(BtnCariObatNonRacikan);
        BtnCariObatNonRacikan.setBounds(628, 2170, 28, 23);

        CariObatNonRacikan.setHighlighter(null);
        CariObatNonRacikan.setName("CariObatNonRacikan"); // NOI18N
        CariObatNonRacikan.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                CariObatNonRacikanKeyPressed(evt);
            }
        });
        FormInput.add(CariObatNonRacikan);
        CariObatNonRacikan.setBounds(16, 2170, 610, 23);

        Scroll9.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(240, 245, 235)));
        Scroll9.setName("Scroll9"); // NOI18N
        Scroll9.setOpaque(true);

        tbResep.setName("tbResep"); // NOI18N
        Scroll9.setViewportView(tbResep);

        FormInput.add(Scroll9);
        Scroll9.setBounds(16, 2197, 670, 216);

        jLabel20.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        jLabel20.setText("Obat Racikan :");
        jLabel20.setName("jLabel20"); // NOI18N
        FormInput.add(jLabel20);
        jLabel20.setBounds(16, 2420, 270, 23);

        Scroll10.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(240, 245, 235)));
        Scroll10.setName("Scroll10"); // NOI18N
        Scroll10.setOpaque(true);

        tbObatRacikan.setName("tbObatRacikan"); // NOI18N
        Scroll10.setViewportView(tbObatRacikan);

        FormInput.add(Scroll10);
        Scroll10.setBounds(16, 2440, 670, 96);

        CariObatRacikan.setHighlighter(null);
        CariObatRacikan.setName("CariObatRacikan"); // NOI18N
        CariObatRacikan.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                CariObatRacikanKeyPressed(evt);
            }
        });
        FormInput.add(CariObatRacikan);
        CariObatRacikan.setBounds(16, 2540, 610, 23);

        BtnCariObatRacikan.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/accept.png"))); // NOI18N
        BtnCariObatRacikan.setMnemonic('1');
        BtnCariObatRacikan.setToolTipText("Alt+1");
        BtnCariObatRacikan.setName("BtnCariObatRacikan"); // NOI18N
        BtnCariObatRacikan.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnCariObatRacikan.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnCariObatRacikanActionPerformed(evt);
            }
        });
        FormInput.add(BtnCariObatRacikan);
        BtnCariObatRacikan.setBounds(628, 2540, 28, 23);

        Scroll11.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(240, 245, 235)));
        Scroll11.setName("Scroll11"); // NOI18N
        Scroll11.setOpaque(true);

        tbDetailObatRacikan.setName("tbDetailObatRacikan"); // NOI18N
        Scroll11.setViewportView(tbDetailObatRacikan);

        FormInput.add(Scroll11);
        Scroll11.setBounds(16, 2567, 670, 216);

        jLabel21.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        jLabel21.setText("Tindakan :");
        jLabel21.setName("jLabel21"); // NOI18N
        FormInput.add(jLabel21);
        jLabel21.setBounds(16, 2790, 120, 23);

        CariTindakan.setHighlighter(null);
        CariTindakan.setName("CariTindakan"); // NOI18N
        CariTindakan.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                CariTindakanKeyPressed(evt);
            }
        });
        FormInput.add(CariTindakan);
        CariTindakan.setBounds(16, 2810, 610, 23);

        BtnCariTindakan.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/accept.png"))); // NOI18N
        BtnCariTindakan.setMnemonic('1');
        BtnCariTindakan.setToolTipText("Alt+1");
        BtnCariTindakan.setName("BtnCariTindakan"); // NOI18N
        BtnCariTindakan.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnCariTindakan.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnCariTindakanActionPerformed(evt);
            }
        });
        FormInput.add(BtnCariTindakan);
        BtnCariTindakan.setBounds(628, 2810, 28, 23);

        Scroll12.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(240, 245, 235)));
        Scroll12.setName("Scroll12"); // NOI18N
        Scroll12.setOpaque(true);

        tbTindakan.setName("tbTindakan"); // NOI18N
        Scroll12.setViewportView(tbTindakan);

        FormInput.add(Scroll12);
        Scroll12.setBounds(16, 2840, 670, 116);

        BtnAllPenyakit.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/Search-16x16.png"))); // NOI18N
        BtnAllPenyakit.setMnemonic('2');
        BtnAllPenyakit.setToolTipText("Alt+2");
        BtnAllPenyakit.setName("BtnAllPenyakit"); // NOI18N
        BtnAllPenyakit.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnAllPenyakit.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnAllPenyakitActionPerformed(evt);
            }
        });
        FormInput.add(BtnAllPenyakit);
        BtnAllPenyakit.setBounds(658, 660, 28, 23);

        BtnAllProsedur.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/Search-16x16.png"))); // NOI18N
        BtnAllProsedur.setMnemonic('2');
        BtnAllProsedur.setToolTipText("Alt+2");
        BtnAllProsedur.setName("BtnAllProsedur"); // NOI18N
        BtnAllProsedur.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnAllProsedur.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnAllProsedurActionPerformed(evt);
            }
        });
        FormInput.add(BtnAllProsedur);
        BtnAllProsedur.setBounds(658, 830, 28, 23);

        BtnAllRadiologi.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/Search-16x16.png"))); // NOI18N
        BtnAllRadiologi.setMnemonic('2');
        BtnAllRadiologi.setToolTipText("Alt+2");
        BtnAllRadiologi.setName("BtnAllRadiologi"); // NOI18N
        BtnAllRadiologi.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnAllRadiologi.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnAllRadiologiActionPerformed(evt);
            }
        });
        FormInput.add(BtnAllRadiologi);
        BtnAllRadiologi.setBounds(658, 1000, 28, 23);

        BtnAllPatologiKlinis.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/Search-16x16.png"))); // NOI18N
        BtnAllPatologiKlinis.setMnemonic('2');
        BtnAllPatologiKlinis.setToolTipText("Alt+2");
        BtnAllPatologiKlinis.setName("BtnAllPatologiKlinis"); // NOI18N
        BtnAllPatologiKlinis.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnAllPatologiKlinis.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnAllPatologiKlinisActionPerformed(evt);
            }
        });
        FormInput.add(BtnAllPatologiKlinis);
        BtnAllPatologiKlinis.setBounds(658, 1170, 28, 23);

        BtnAllDetailLaboratPK.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/Search-16x16.png"))); // NOI18N
        BtnAllDetailLaboratPK.setMnemonic('2');
        BtnAllDetailLaboratPK.setToolTipText("Alt+2");
        BtnAllDetailLaboratPK.setName("BtnAllDetailLaboratPK"); // NOI18N
        BtnAllDetailLaboratPK.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnAllDetailLaboratPK.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnAllDetailLaboratPKActionPerformed(evt);
            }
        });
        FormInput.add(BtnAllDetailLaboratPK);
        BtnAllDetailLaboratPK.setBounds(658, 1310, 28, 23);

        BtnAllPA.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/Search-16x16.png"))); // NOI18N
        BtnAllPA.setMnemonic('2');
        BtnAllPA.setToolTipText("Alt+2");
        BtnAllPA.setName("BtnAllPA"); // NOI18N
        BtnAllPA.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnAllPA.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnAllPAActionPerformed(evt);
            }
        });
        FormInput.add(BtnAllPA);
        BtnAllPA.setBounds(658, 1580, 28, 23);

        BtnAllMB.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/Search-16x16.png"))); // NOI18N
        BtnAllMB.setMnemonic('2');
        BtnAllMB.setToolTipText("Alt+2");
        BtnAllMB.setName("BtnAllMB"); // NOI18N
        BtnAllMB.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnAllMB.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnAllMBActionPerformed(evt);
            }
        });
        FormInput.add(BtnAllMB);
        BtnAllMB.setBounds(658, 1760, 28, 23);

        BtnAllDetailMB.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/Search-16x16.png"))); // NOI18N
        BtnAllDetailMB.setMnemonic('2');
        BtnAllDetailMB.setToolTipText("Alt+2");
        BtnAllDetailMB.setName("BtnAllDetailMB"); // NOI18N
        BtnAllDetailMB.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnAllDetailMB.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnAllDetailMBActionPerformed(evt);
            }
        });
        FormInput.add(BtnAllDetailMB);
        BtnAllDetailMB.setBounds(658, 1900, 28, 23);

        BtnAllObatNonRacikan.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/Search-16x16.png"))); // NOI18N
        BtnAllObatNonRacikan.setMnemonic('2');
        BtnAllObatNonRacikan.setToolTipText("Alt+2");
        BtnAllObatNonRacikan.setName("BtnAllObatNonRacikan"); // NOI18N
        BtnAllObatNonRacikan.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnAllObatNonRacikan.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnAllObatNonRacikanActionPerformed(evt);
            }
        });
        FormInput.add(BtnAllObatNonRacikan);
        BtnAllObatNonRacikan.setBounds(658, 2170, 28, 23);

        BtnAllObatRacikan.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/Search-16x16.png"))); // NOI18N
        BtnAllObatRacikan.setMnemonic('2');
        BtnAllObatRacikan.setToolTipText("Alt+2");
        BtnAllObatRacikan.setName("BtnAllObatRacikan"); // NOI18N
        BtnAllObatRacikan.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnAllObatRacikan.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnAllObatRacikanActionPerformed(evt);
            }
        });
        FormInput.add(BtnAllObatRacikan);
        BtnAllObatRacikan.setBounds(658, 2540, 28, 23);

        BtnAllTindakan.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/Search-16x16.png"))); // NOI18N
        BtnAllTindakan.setMnemonic('2');
        BtnAllTindakan.setToolTipText("Alt+2");
        BtnAllTindakan.setName("BtnAllTindakan"); // NOI18N
        BtnAllTindakan.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnAllTindakan.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnAllTindakanActionPerformed(evt);
            }
        });
        FormInput.add(BtnAllTindakan);
        BtnAllTindakan.setBounds(658, 2810, 28, 23);

        scrollInput.setViewportView(FormInput);

        internalFrame2.add(scrollInput, java.awt.BorderLayout.CENTER);

        TabRawat.addTab("Input Template", internalFrame2);

        internalFrame3.setBorder(null);
        internalFrame3.setName("internalFrame3"); // NOI18N
        internalFrame3.setLayout(new java.awt.BorderLayout(1, 1));

        Scroll.setName("Scroll"); // NOI18N
        Scroll.setOpaque(true);
        Scroll.setPreferredSize(new java.awt.Dimension(452, 200));

        tbDokter.setAutoCreateRowSorter(true);
        tbDokter.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {},
                {},
                {},
                {}
            },
            new String [] {

            }
        ));
        tbDokter.setToolTipText("Silahkan klik untuk memilih data yang mau diedit ataupun dihapus");
        tbDokter.setName("tbDokter"); // NOI18N
        tbDokter.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                tbDokterMouseClicked(evt);
            }
        });
        tbDokter.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                tbDokterKeyPressed(evt);
            }
        });
        Scroll.setViewportView(tbDokter);

        internalFrame3.add(Scroll, java.awt.BorderLayout.CENTER);

        panelGlass9.setName("panelGlass9"); // NOI18N
        panelGlass9.setPreferredSize(new java.awt.Dimension(44, 44));
        panelGlass9.setLayout(new java.awt.FlowLayout(java.awt.FlowLayout.LEFT, 5, 9));

        label9.setText("Key Word :");
        label9.setName("label9"); // NOI18N
        label9.setPreferredSize(new java.awt.Dimension(70, 23));
        panelGlass9.add(label9);

        TCari.setName("TCari"); // NOI18N
        TCari.setPreferredSize(new java.awt.Dimension(530, 23));
        TCari.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                TCariKeyPressed(evt);
            }
        });
        panelGlass9.add(TCari);

        BtnCari.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/accept.png"))); // NOI18N
        BtnCari.setMnemonic('1');
        BtnCari.setToolTipText("Alt+1");
        BtnCari.setName("BtnCari"); // NOI18N
        BtnCari.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnCari.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnCariActionPerformed(evt);
            }
        });
        BtnCari.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                BtnCariKeyPressed(evt);
            }
        });
        panelGlass9.add(BtnCari);

        BtnAll.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/Search-16x16.png"))); // NOI18N
        BtnAll.setMnemonic('M');
        BtnAll.setToolTipText("Alt+M");
        BtnAll.setName("BtnAll"); // NOI18N
        BtnAll.setPreferredSize(new java.awt.Dimension(28, 23));
        BtnAll.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnAllActionPerformed(evt);
            }
        });
        BtnAll.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                BtnAllKeyPressed(evt);
            }
        });
        panelGlass9.add(BtnAll);

        internalFrame3.add(panelGlass9, java.awt.BorderLayout.PAGE_END);

        TabRawat.addTab("Data Template", internalFrame3);

        internalFrame1.add(TabRawat, java.awt.BorderLayout.CENTER);

        panelGlass8.setName("panelGlass8"); // NOI18N
        panelGlass8.setPreferredSize(new java.awt.Dimension(44, 54));
        panelGlass8.setLayout(new java.awt.FlowLayout(java.awt.FlowLayout.LEFT, 5, 9));

        BtnSimpan.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/save-16x16i.png"))); // NOI18N
        BtnSimpan.setMnemonic('S');
        BtnSimpan.setText("Simpan");
        BtnSimpan.setToolTipText("Alt+S");
        BtnSimpan.setName("BtnSimpan"); // NOI18N
        BtnSimpan.setPreferredSize(new java.awt.Dimension(100, 30));
        BtnSimpan.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnSimpanActionPerformed(evt);
            }
        });
        BtnSimpan.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                BtnSimpanKeyPressed(evt);
            }
        });
        panelGlass8.add(BtnSimpan);

        BtnBatal.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/Cancel-2-16x16.png"))); // NOI18N
        BtnBatal.setMnemonic('B');
        BtnBatal.setText("Baru");
        BtnBatal.setToolTipText("Alt+B");
        BtnBatal.setName("BtnBatal"); // NOI18N
        BtnBatal.setPreferredSize(new java.awt.Dimension(100, 30));
        BtnBatal.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnBatalActionPerformed(evt);
            }
        });
        BtnBatal.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                BtnBatalKeyPressed(evt);
            }
        });
        panelGlass8.add(BtnBatal);

        BtnHapus.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/stop_f2.png"))); // NOI18N
        BtnHapus.setMnemonic('H');
        BtnHapus.setText("Hapus");
        BtnHapus.setToolTipText("Alt+H");
        BtnHapus.setName("BtnHapus"); // NOI18N
        BtnHapus.setPreferredSize(new java.awt.Dimension(100, 30));
        BtnHapus.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnHapusActionPerformed(evt);
            }
        });
        BtnHapus.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                BtnHapusKeyPressed(evt);
            }
        });
        panelGlass8.add(BtnHapus);

        BtnEdit.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/inventaris.png"))); // NOI18N
        BtnEdit.setMnemonic('G');
        BtnEdit.setText("Ganti");
        BtnEdit.setToolTipText("Alt+G");
        BtnEdit.setName("BtnEdit"); // NOI18N
        BtnEdit.setPreferredSize(new java.awt.Dimension(100, 30));
        BtnEdit.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnEditActionPerformed(evt);
            }
        });
        BtnEdit.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                BtnEditKeyPressed(evt);
            }
        });
        panelGlass8.add(BtnEdit);

        label10.setText("Record :");
        label10.setName("label10"); // NOI18N
        label10.setPreferredSize(new java.awt.Dimension(90, 23));
        panelGlass8.add(label10);

        LCount.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        LCount.setText("0");
        LCount.setName("LCount"); // NOI18N
        LCount.setPreferredSize(new java.awt.Dimension(70, 23));
        panelGlass8.add(LCount);

        BtnKeluar.setIcon(new javax.swing.ImageIcon(getClass().getResource("/picture/exit.png"))); // NOI18N
        BtnKeluar.setMnemonic('K');
        BtnKeluar.setText("Keluar");
        BtnKeluar.setToolTipText("Alt+K");
        BtnKeluar.setName("BtnKeluar"); // NOI18N
        BtnKeluar.setPreferredSize(new java.awt.Dimension(100, 30));
        BtnKeluar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BtnKeluarActionPerformed(evt);
            }
        });
        BtnKeluar.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                BtnKeluarKeyPressed(evt);
            }
        });
        panelGlass8.add(BtnKeluar);

        internalFrame1.add(panelGlass8, java.awt.BorderLayout.PAGE_END);

        getContentPane().add(internalFrame1, java.awt.BorderLayout.CENTER);

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void TCariKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_TCariKeyPressed
        if(evt.getKeyCode()==KeyEvent.VK_ENTER){
            BtnCariActionPerformed(null);
        }else if(evt.getKeyCode()==KeyEvent.VK_PAGE_DOWN){
            BtnCari.requestFocus();
        }else if(evt.getKeyCode()==KeyEvent.VK_PAGE_UP){
            BtnKeluar.requestFocus();
        }else if(evt.getKeyCode()==KeyEvent.VK_UP){
            tbDokter.requestFocus();
        }
}//GEN-LAST:event_TCariKeyPressed

    private void BtnCariActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnCariActionPerformed
        tampil();
}//GEN-LAST:event_BtnCariActionPerformed

    private void BtnCariKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_BtnCariKeyPressed
        if(evt.getKeyCode()==KeyEvent.VK_SPACE){
            BtnCariActionPerformed(null);
        }else{
            Valid.pindah(evt, TCari, BtnAll);
        }
}//GEN-LAST:event_BtnCariKeyPressed

    private void tbDokterMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_tbDokterMouseClicked
        if(tabMode.getRowCount()!=0){
            try {
                getData();
            } catch (java.lang.NullPointerException e) {
            }
            if((evt.getClickCount()==2)&&(tbDokter.getSelectedColumn()==0)){
                TabRawat.setSelectedIndex(0);
            }
        }
}//GEN-LAST:event_tbDokterMouseClicked

    private void tbDokterKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_tbDokterKeyPressed
        if(tabMode.getRowCount()!=0){
            if((evt.getKeyCode()==KeyEvent.VK_ENTER)||(evt.getKeyCode()==KeyEvent.VK_UP)||(evt.getKeyCode()==KeyEvent.VK_DOWN)){
                try {
                    getData();
                } catch (java.lang.NullPointerException e) {
                }
            }else if(evt.getKeyCode()==KeyEvent.VK_SPACE){
                try {
                    getData();
                    TabRawat.setSelectedIndex(0);
                } catch (java.lang.NullPointerException e) {
                }
            }
        }
}//GEN-LAST:event_tbDokterKeyPressed

    private void BtnHapusActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnHapusActionPerformed
        /*if(Nm.getText().trim().equals("")){
            JOptionPane.showMessageDialog(null,"Maaf, Pilih dulu data yang akan Anda hapus dengan menklik data pada tabel...!!!");
            tbDokter.requestFocus();
        }else{
            Valid.hapusTable(tabMode,Kd,"template_hasil_radiologi","no_template");
            tampil();
            emptTeks();
        }*/
}//GEN-LAST:event_BtnHapusActionPerformed

    private void BtnHapusKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_BtnHapusKeyPressed
        if(evt.getKeyCode()==KeyEvent.VK_SPACE){
            BtnHapusActionPerformed(null);
        }else{
            Valid.pindah(evt, BtnBatal, BtnEdit);
        }
}//GEN-LAST:event_BtnHapusKeyPressed

    private void BtnEditActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnEditActionPerformed
        /*if(Kd.getText().trim().equals("")){
            Valid.textKosong(Kd,"No.Template");
        }else if(Nm.getText().trim().equals("")){
            Valid.textKosong(Nm,"Nama Pemeriksaan");
        }else if(Template.getText().trim().equals("")){
            Valid.textKosong(Template,"Template Hasil Radiologi");
        }else{
            Valid.editTable(tabMode,"template_hasil_radiologi","no_template","?","no_template=?,nama_pemeriksaan=?,template_hasil_radiologi=?",4,new String[]{
                Kd.getText(),Nm.getText(),Template.getText(),tbDokter.getValueAt(tbDokter.getSelectedRow(),0).toString()
            });
            if(tabMode.getRowCount()!=0){tampil();emptTeks();TabRawat.setSelectedIndex(1);}
            
        }*/
}//GEN-LAST:event_BtnEditActionPerformed

    private void BtnEditKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_BtnEditKeyPressed
        if(evt.getKeyCode()==KeyEvent.VK_SPACE){
            BtnEditActionPerformed(null);
        }else{
            Valid.pindah(evt, BtnHapus, BtnKeluar);
        }
}//GEN-LAST:event_BtnEditKeyPressed

    private void BtnAllActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnAllActionPerformed
        TCari.setText("");
        tampil();
}//GEN-LAST:event_BtnAllActionPerformed

    private void BtnAllKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_BtnAllKeyPressed
        if(evt.getKeyCode()==KeyEvent.VK_SPACE){
            BtnAllActionPerformed(null);
        }else{
            Valid.pindah(evt, BtnCari, BtnKeluar);
        }
}//GEN-LAST:event_BtnAllKeyPressed

    private void BtnKeluarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnKeluarActionPerformed
            dispose();  
}//GEN-LAST:event_BtnKeluarActionPerformed

    private void BtnKeluarKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_BtnKeluarKeyPressed
        if(evt.getKeyCode()==KeyEvent.VK_SPACE){            
            dispose();              
        }else{Valid.pindah(evt,BtnAll,TCari);}
}//GEN-LAST:event_BtnKeluarKeyPressed

    private void BtnSimpanActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnSimpanActionPerformed
        /*if(Kd.getText().trim().equals("")){
            Valid.textKosong(Kd,"No.Template");
        }else if(Nm.getText().trim().equals("")){
            Valid.textKosong(Nm,"Nama Pemeriksaan");
        }else if(Template.getText().trim().equals("")){
            Valid.textKosong(Template,"Template Hasil Radiologi");
        }else{
            if(Sequel.menyimpantf("template_hasil_radiologi","?,?,?","No.Template",3,new String[]{
                Kd.getText(),Nm.getText(),Template.getText() 
            })==true){
                tampil();
                emptTeks();
            }                
        }*/
}//GEN-LAST:event_BtnSimpanActionPerformed

    private void BtnSimpanKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_BtnSimpanKeyPressed
        if(evt.getKeyCode()==KeyEvent.VK_SPACE){
            BtnSimpanActionPerformed(null);
        }else{
            Valid.pindah(evt,Subjek,BtnBatal);
        }
}//GEN-LAST:event_BtnSimpanKeyPressed

    private void BtnBatalActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnBatalActionPerformed
        emptTeks();
}//GEN-LAST:event_BtnBatalActionPerformed

    private void BtnBatalKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_BtnBatalKeyPressed
        if(evt.getKeyCode()==KeyEvent.VK_SPACE){
            emptTeks();
        }else{Valid.pindah(evt, BtnSimpan, BtnHapus);}
}//GEN-LAST:event_BtnBatalKeyPressed
/*
private void KdKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_TKdKeyPressed
    Valid.pindah(evt,BtnCari,Nm);
}//GEN-LAST:event_TKdKeyPressed
*/

    private void KdKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_KdKeyPressed
        //Valid.pindah(evt,TCari,Nm,TCari);
    }//GEN-LAST:event_KdKeyPressed

    private void SubjekKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_SubjekKeyPressed
        //Valid.pindah2(evt,Nm,BtnSimpan);
    }//GEN-LAST:event_SubjekKeyPressed

    private void TabRawatMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_TabRawatMouseClicked
        if(TabRawat.getSelectedIndex()==1){
            tampil();
        }
    }//GEN-LAST:event_TabRawatMouseClicked

    private void KdDokterKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_KdDokterKeyPressed

    }//GEN-LAST:event_KdDokterKeyPressed

    private void BtnDokterActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnDokterActionPerformed
        /*dokter.isCek();
        dokter.setSize(internalFrame1.getWidth()-20,internalFrame1.getHeight()-20);
        dokter.setLocationRelativeTo(internalFrame1);
        dokter.setAlwaysOnTop(false);
        dokter.setVisible(true);*/
    }//GEN-LAST:event_BtnDokterActionPerformed

    private void BtnDokterKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_BtnDokterKeyPressed
        //Valid.pindah(evt,Monitoring,BtnSimpan);
    }//GEN-LAST:event_BtnDokterKeyPressed

    private void ObjekKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_ObjekKeyPressed
        // TODO add your handling code here:
    }//GEN-LAST:event_ObjekKeyPressed

    private void Template2KeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_Template2KeyPressed
        // TODO add your handling code here:
    }//GEN-LAST:event_Template2KeyPressed

    private void Template3KeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_Template3KeyPressed
        // TODO add your handling code here:
    }//GEN-LAST:event_Template3KeyPressed

    private void Template4KeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_Template4KeyPressed
        // TODO add your handling code here:
    }//GEN-LAST:event_Template4KeyPressed

    private void Template5KeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_Template5KeyPressed
        // TODO add your handling code here:
    }//GEN-LAST:event_Template5KeyPressed

    private void BtnCariPenyakitActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnCariPenyakitActionPerformed
        tampildiagnosa();
    }//GEN-LAST:event_BtnCariPenyakitActionPerformed

    private void DiagnosaKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_DiagnosaKeyPressed
        if(evt.getKeyCode()==KeyEvent.VK_ENTER){
            tampildiagnosa();
        }
    }//GEN-LAST:event_DiagnosaKeyPressed

    private void ProsedurKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_ProsedurKeyPressed
        if(evt.getKeyCode()==KeyEvent.VK_ENTER){
            tampilprosedure();
        }
    }//GEN-LAST:event_ProsedurKeyPressed

    private void BtnCariProsedurActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnCariProsedurActionPerformed
        tampilprosedure();
    }//GEN-LAST:event_BtnCariProsedurActionPerformed

    private void BtnCariRadiologiActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnCariRadiologiActionPerformed
        tampilRadiologi2();
    }//GEN-LAST:event_BtnCariRadiologiActionPerformed

    private void CariRadiologiKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_CariRadiologiKeyPressed
        if(evt.getKeyCode()==KeyEvent.VK_ENTER){
            tampilRadiologi2();
        }
    }//GEN-LAST:event_CariRadiologiKeyPressed

    private void CariPKKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_CariPKKeyPressed
        if(evt.getKeyCode()==KeyEvent.VK_ENTER){
            tampilPK2();
        }
    }//GEN-LAST:event_CariPKKeyPressed

    private void BtnCariLaboratoriumPKActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnCariLaboratoriumPKActionPerformed
        tampilPK2();
    }//GEN-LAST:event_BtnCariLaboratoriumPKActionPerformed

    private void CariDetailPKKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_CariDetailPKKeyPressed
        if(evt.getKeyCode()==KeyEvent.VK_ENTER){
            tampilDetailPK();
        }
    }//GEN-LAST:event_CariDetailPKKeyPressed

    private void BtnDetailLaboratPKActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnDetailLaboratPKActionPerformed
        tampilDetailPK();
    }//GEN-LAST:event_BtnDetailLaboratPKActionPerformed

    private void CariPAKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_CariPAKeyPressed
        if(evt.getKeyCode()==KeyEvent.VK_ENTER){
            tampilPA2();
        }
    }//GEN-LAST:event_CariPAKeyPressed

    private void BtnCariPAActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnCariPAActionPerformed
        tampilPA2();
    }//GEN-LAST:event_BtnCariPAActionPerformed

    private void CariMBKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_CariMBKeyPressed
        // TODO add your handling code here:
    }//GEN-LAST:event_CariMBKeyPressed

    private void BtnCariMBActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnCariMBActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_BtnCariMBActionPerformed

    private void CariDetailMBKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_CariDetailMBKeyPressed
        // TODO add your handling code here:
    }//GEN-LAST:event_CariDetailMBKeyPressed

    private void BtnCariDetailMBActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnCariDetailMBActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_BtnCariDetailMBActionPerformed

    private void BtnCariObatNonRacikanActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnCariObatNonRacikanActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_BtnCariObatNonRacikanActionPerformed

    private void CariObatNonRacikanKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_CariObatNonRacikanKeyPressed
        // TODO add your handling code here:
    }//GEN-LAST:event_CariObatNonRacikanKeyPressed

    private void CariObatRacikanKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_CariObatRacikanKeyPressed
        // TODO add your handling code here:
    }//GEN-LAST:event_CariObatRacikanKeyPressed

    private void BtnCariObatRacikanActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnCariObatRacikanActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_BtnCariObatRacikanActionPerformed

    private void CariTindakanKeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_CariTindakanKeyPressed
        // TODO add your handling code here:
    }//GEN-LAST:event_CariTindakanKeyPressed

    private void BtnCariTindakanActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnCariTindakanActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_BtnCariTindakanActionPerformed

    private void BtnAllPenyakitActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnAllPenyakitActionPerformed
        Diagnosa.setText("");
        tampildiagnosa();
    }//GEN-LAST:event_BtnAllPenyakitActionPerformed

    private void BtnAllProsedurActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnAllProsedurActionPerformed
        Prosedur.setText("");
        tampilprosedure();
    }//GEN-LAST:event_BtnAllProsedurActionPerformed

    private void BtnAllRadiologiActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnAllRadiologiActionPerformed
        CariRadiologi.setText("");
        tampilRadiologi();
        tampilRadiologi2();
    }//GEN-LAST:event_BtnAllRadiologiActionPerformed

    private void BtnAllPatologiKlinisActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnAllPatologiKlinisActionPerformed
        CariPA.setText("");
        tampilPK();
        tampilPK2();
    }//GEN-LAST:event_BtnAllPatologiKlinisActionPerformed

    private void BtnAllDetailLaboratPKActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnAllDetailLaboratPKActionPerformed
        CariDetailPK.setText("");
        tampilDetailPK();
    }//GEN-LAST:event_BtnAllDetailLaboratPKActionPerformed

    private void BtnAllPAActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnAllPAActionPerformed
        CariPA.setText("");
        tampilPA();
        tampilPA2();
    }//GEN-LAST:event_BtnAllPAActionPerformed

    private void BtnAllMBActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnAllMBActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_BtnAllMBActionPerformed

    private void BtnAllDetailMBActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnAllDetailMBActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_BtnAllDetailMBActionPerformed

    private void BtnAllObatNonRacikanActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnAllObatNonRacikanActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_BtnAllObatNonRacikanActionPerformed

    private void BtnAllObatRacikanActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnAllObatRacikanActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_BtnAllObatRacikanActionPerformed

    private void BtnAllTindakanActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BtnAllTindakanActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_BtnAllTindakanActionPerformed

    private void tbPermintaanPKMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_tbPermintaanPKMouseClicked
        if(tabModePK.getRowCount()!=0){
            try {
                Valid.tabelKosong(tabModeDetailPK);
                tampilDetailPK();
            } catch (java.lang.NullPointerException e) {
            }
        }
    }//GEN-LAST:event_tbPermintaanPKMouseClicked

    /**
    * @param args the command line arguments
    */
    public static void main(String args[]) {
        java.awt.EventQueue.invokeLater(() -> {
            MasterTemplatePemeriksaanDokter dialog = new MasterTemplatePemeriksaanDokter(new javax.swing.JFrame(), true);
            dialog.addWindowListener(new java.awt.event.WindowAdapter() {
                @Override
                public void windowClosing(java.awt.event.WindowEvent e) {
                    System.exit(0);
                }
            });
            dialog.setVisible(true);
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private widget.Button BtnAll;
    private widget.Button BtnAllDetailLaboratPK;
    private widget.Button BtnAllDetailMB;
    private widget.Button BtnAllMB;
    private widget.Button BtnAllObatNonRacikan;
    private widget.Button BtnAllObatRacikan;
    private widget.Button BtnAllPA;
    private widget.Button BtnAllPatologiKlinis;
    private widget.Button BtnAllPenyakit;
    private widget.Button BtnAllProsedur;
    private widget.Button BtnAllRadiologi;
    private widget.Button BtnAllTindakan;
    private widget.Button BtnBatal;
    private widget.Button BtnCari;
    private widget.Button BtnCariDetailMB;
    private widget.Button BtnCariLaboratoriumPK;
    private widget.Button BtnCariMB;
    private widget.Button BtnCariObatNonRacikan;
    private widget.Button BtnCariObatRacikan;
    private widget.Button BtnCariPA;
    private widget.Button BtnCariPenyakit;
    private widget.Button BtnCariProsedur;
    private widget.Button BtnCariRadiologi;
    private widget.Button BtnCariTindakan;
    private widget.Button BtnDetailLaboratPK;
    private widget.Button BtnDokter;
    private widget.Button BtnEdit;
    private widget.Button BtnHapus;
    private widget.Button BtnKeluar;
    private widget.Button BtnSimpan;
    public widget.TextBox CariDetailMB;
    public widget.TextBox CariDetailPK;
    public widget.TextBox CariMB;
    public widget.TextBox CariObatNonRacikan;
    public widget.TextBox CariObatRacikan;
    public widget.TextBox CariPA;
    public widget.TextBox CariPK;
    public widget.TextBox CariRadiologi;
    public widget.TextBox CariTindakan;
    public widget.TextBox Diagnosa;
    private widget.PanelBiasa FormInput;
    private widget.TextBox Kd;
    private widget.TextBox KdDokter;
    private widget.Label LCount;
    private widget.TextBox NmDokter;
    private widget.TextArea Objek;
    public widget.TextBox Prosedur;
    private widget.ScrollPane Scroll;
    private widget.ScrollPane Scroll1;
    private widget.ScrollPane Scroll10;
    private widget.ScrollPane Scroll11;
    private widget.ScrollPane Scroll12;
    private widget.ScrollPane Scroll2;
    private widget.ScrollPane Scroll3;
    private widget.ScrollPane Scroll4;
    private widget.ScrollPane Scroll5;
    private widget.ScrollPane Scroll6;
    private widget.ScrollPane Scroll7;
    private widget.ScrollPane Scroll8;
    private widget.ScrollPane Scroll9;
    private widget.TextArea Subjek;
    private widget.TextBox TCari;
    private javax.swing.JTabbedPane TabRawat;
    private widget.TextArea Template2;
    private widget.TextArea Template3;
    private widget.TextArea Template4;
    private widget.TextArea Template5;
    private widget.InternalFrame internalFrame1;
    private widget.InternalFrame internalFrame2;
    private widget.InternalFrame internalFrame3;
    private widget.Label jLabel13;
    private widget.Label jLabel14;
    private widget.Label jLabel15;
    private widget.Label jLabel16;
    private widget.Label jLabel17;
    private widget.Label jLabel18;
    private widget.Label jLabel19;
    private widget.Label jLabel20;
    private widget.Label jLabel21;
    private widget.Label jLabel40;
    private widget.Label jLabel41;
    private widget.Label jLabel42;
    private widget.Label jLabel43;
    private widget.Label jLabel44;
    private widget.Label jLabel45;
    private widget.Label label10;
    private widget.Label label12;
    private widget.Label label14;
    private widget.Label label9;
    private widget.panelisi panelGlass8;
    private widget.panelisi panelGlass9;
    private widget.ScrollPane scrollInput;
    private widget.ScrollPane scrollPane2;
    private widget.ScrollPane scrollPane3;
    private widget.ScrollPane scrollPane4;
    private widget.ScrollPane scrollPane5;
    private widget.ScrollPane scrollPane6;
    private widget.ScrollPane scrollPane7;
    public widget.Table tbDetailMB;
    public widget.Table tbDetailObatRacikan;
    public widget.Table tbDetailPK;
    public widget.Table tbDiagnosa;
    private widget.Table tbDokter;
    public widget.Table tbObatRacikan;
    public widget.Table tbPermintaanMB;
    public widget.Table tbPermintaanPA;
    public widget.Table tbPermintaanPK;
    public widget.Table tbPermintaanRadiologi;
    public widget.Table tbProsedur;
    public widget.Table tbResep;
    public widget.Table tbTindakan;
    // End of variables declaration//GEN-END:variables

    private void tampil() {
        Valid.tabelKosong(tabMode);
        try{
            ps=koneksi.prepareStatement(
                    "select template_hasil_radiologi.no_template,template_hasil_radiologi.nama_pemeriksaan, "+
                    "template_hasil_radiologi.template_hasil_radiologi from template_hasil_radiologi "+
                    "where template_hasil_radiologi.no_template like ? or template_hasil_radiologi.nama_pemeriksaan like ? or "+
                    "template_hasil_radiologi.template_hasil_radiologi like ? order by template_hasil_radiologi.no_template");
            try {
                ps.setString(1,"%"+TCari.getText().trim()+"%");
                ps.setString(2,"%"+TCari.getText().trim()+"%");
                ps.setString(3,"%"+TCari.getText().trim()+"%");
                rs=ps.executeQuery();
                while(rs.next()){
                    tabMode.addRow(new Object[]{
                        rs.getString(1),rs.getString(2),rs.getString(3)
                    });
                }
            } catch (Exception e) {
                System.out.println(e);
            } finally{
                if(rs!=null){
                    rs.close();
                }
                if(ps!=null){
                    ps.close();
                }
            }
        }catch(Exception e){
            System.out.println("Notifikasi : "+e);
        }
        LCount.setText(""+tabMode.getRowCount());
    }

    public void emptTeks() {
        /*Kd.setText("");
        Nm.setText("");
        Template.setText("");
        Valid.autoNomer("template_hasil_radiologi","R",4,Kd);
        TabRawat.setSelectedIndex(0);
        Kd.requestFocus();*/
    }

    private void getData() {
        if(tbDokter.getSelectedRow()!= -1){
            Kd.setText(tabMode.getValueAt(tbDokter.getSelectedRow(),0).toString());
            //Nm.setText(tabMode.getValueAt(tbDokter.getSelectedRow(),1).toString());
            Subjek.setText(tabMode.getValueAt(tbDokter.getSelectedRow(),2).toString());
        }
    }

    public JTable getTable(){
        return tbDokter;
    }
    
    public void isCek(){
        BtnSimpan.setEnabled(akses.gettemplate_pemeriksaan());
        BtnHapus.setEnabled(akses.gettemplate_pemeriksaan());
        BtnEdit.setEnabled(akses.gettemplate_pemeriksaan());
    }
    
    public void setTampil(){
       TabRawat.setSelectedIndex(1);
    }
    
    private void tampildiagnosa() {
        try{
            jml=0;
            for(i=0;i<tbDiagnosa.getRowCount();i++){
                if(tbDiagnosa.getValueAt(i,0).toString().equals("true")){
                    jml++;
                }
            }

            pilih=null;
            pilih=new boolean[jml];
            kode=null;
            kode=new String[jml];
            nama=null;
            nama=new String[jml];
            ciripny=null;
            ciripny=new String[jml];
            keterangan=null;
            keterangan=new String[jml];
            kategori=null;
            kategori=new String[jml];
            cirium=null;
            cirium=new String[jml];

            index=0; 
            for(i=0;i<tbDiagnosa.getRowCount();i++){
                if(tbDiagnosa.getValueAt(i,0).toString().equals("true")){
                    pilih[index]=true;
                    kode[index]=tbDiagnosa.getValueAt(i,1).toString();
                    nama[index]=tbDiagnosa.getValueAt(i,2).toString();
                    ciripny[index]=tbDiagnosa.getValueAt(i,3).toString();
                    keterangan[index]=tbDiagnosa.getValueAt(i,4).toString();
                    kategori[index]=tbDiagnosa.getValueAt(i,5).toString();
                    cirium[index]=tbDiagnosa.getValueAt(i,6).toString();
                    index++;
                }
            }

            Valid.tabelKosong(tabModeDiagnosa);
            for(i=0;i<jml;i++){
                tabModeDiagnosa.addRow(new Object[] {pilih[i],kode[i],nama[i],ciripny[i],keterangan[i],kategori[i],cirium[i]});
            }       

            pspenyakit=koneksi.prepareStatement("select penyakit.kd_penyakit,penyakit.nm_penyakit,penyakit.ciri_ciri,penyakit.keterangan, "+
                    "kategori_penyakit.nm_kategori,kategori_penyakit.ciri_umum "+
                    "from kategori_penyakit inner join penyakit "+
                    "on penyakit.kd_ktg=kategori_penyakit.kd_ktg where  "+
                    " penyakit.kd_penyakit like ? or "+
                    " penyakit.nm_penyakit like ? or "+
                    " penyakit.ciri_ciri like ? or "+
                    " penyakit.keterangan like ? or "+
                    " kategori_penyakit.nm_kategori like ? or "+
                    " kategori_penyakit.ciri_umum like ? "+
                    "order by penyakit.kd_penyakit  LIMIT 1000");
            try {
                pspenyakit.setString(1,"%"+Diagnosa.getText().trim()+"%");
                pspenyakit.setString(2,"%"+Diagnosa.getText().trim()+"%");
                pspenyakit.setString(3,"%"+Diagnosa.getText().trim()+"%");
                pspenyakit.setString(4,"%"+Diagnosa.getText().trim()+"%");
                pspenyakit.setString(5,"%"+Diagnosa.getText().trim()+"%");
                pspenyakit.setString(6,"%"+Diagnosa.getText().trim()+"%");  
                rs=pspenyakit.executeQuery();
                while(rs.next()){
                    tabModeDiagnosa.addRow(new Object[]{false,rs.getString(1),
                                   rs.getString(2),
                                   rs.getString(3),
                                   rs.getString(4),
                                   rs.getString(5),
                                   rs.getString(6)});
                } 
            } catch (Exception e) {
                System.out.println("Notifikasi : "+e);
            } finally{
                if(rs!=null){
                    rs.close();
                }
                if(pspenyakit!=null){
                    pspenyakit.close();
                }
            }           
        }catch(Exception e){
            System.out.println("Notifikasi : "+e);
        }
    }
    
    private void tampilprosedure() {
        try{
            jml=0;
            for(i=0;i<tbProsedur.getRowCount();i++){
                if(tbProsedur.getValueAt(i,0).toString().equals("true")){
                    jml++;
                }
            }

            pilih=null;
            pilih=new boolean[jml];
            kode2=null;
            kode2=new String[jml];
            panjang=null;
            panjang=new String[jml];
            pendek=null;
            pendek=new String[jml];

            index=0; 
            for(i=0;i<tbProsedur.getRowCount();i++){
                if(tbProsedur.getValueAt(i,0).toString().equals("true")){
                    pilih[index]=true;
                    kode2[index]=tbProsedur.getValueAt(i,1).toString();
                    panjang[index]=tbProsedur.getValueAt(i,2).toString();
                    pendek[index]=tbProsedur.getValueAt(i,3).toString();
                    index++;
                }
            }

            Valid.tabelKosong(tabModeProsedur);
            for(i=0;i<jml;i++){
                tabModeProsedur.addRow(new Object[] {pilih[i],kode2[i],panjang[i],pendek[i]});
            }
            
            psprosedur=koneksi.prepareStatement("select * from icd9 where kode like ? or "+
                    " deskripsi_panjang like ? or  deskripsi_pendek like ? order by kode");
            try{
                psprosedur.setString(1,"%"+Prosedur.getText().trim()+"%");
                psprosedur.setString(2,"%"+Prosedur.getText().trim()+"%");
                psprosedur.setString(3,"%"+Prosedur.getText().trim()+"%");
                rs=psprosedur.executeQuery();
                while(rs.next()){
                    tabModeProsedur.addRow(new Object[]{
                        false,rs.getString(1),rs.getString(2),rs.getString(3)});
                }
            }catch(Exception ex){
                System.out.println(ex);
            }finally{
                if(rs != null){
                    rs.close();
                }
                if(psprosedur != null){
                    psprosedur.close();
                }
            }
        }catch(Exception e){
            System.out.println("Notifikasi : "+e);
        }
    }
    
    private void tampilRadiologi() {         
        try{
            file=new File("./cache/permintaanradiologi.iyem");
            file.createNewFile();
            fileWriter = new FileWriter(file);
            iyem=""; 
        
            ps=koneksi.prepareStatement(
                    "select jns_perawatan_radiologi.kd_jenis_prw,jns_perawatan_radiologi.nm_perawatan,jns_perawatan_radiologi.kd_pj,jns_perawatan_radiologi.kelas from jns_perawatan_radiologi where jns_perawatan_radiologi.status='1' order by jns_perawatan_radiologi.kd_jenis_prw");
            try {
                rs=ps.executeQuery();
                while(rs.next()){
                    iyem=iyem+"{\"KodePeriksa\":\""+rs.getString(1)+"\",\"NamaPemeriksaan\":\""+rs.getString(2).replaceAll("\"","")+"\",\"KodePJ\":\""+rs.getString(3)+"\",\"Kelas\":\""+rs.getString(4)+"\"},";
                }
            } catch (Exception e) {
                System.out.println("Notifikasi 1 : "+e);
            } finally{
                if(rs!=null){
                    rs.close();
                }
                if(ps!=null){
                    ps.close();
                }
            }
            fileWriter.write("{\"permintaanradiologi\":["+iyem.substring(0,iyem.length()-1)+"]}");
            fileWriter.flush();
            fileWriter.close();
            iyem=null;
        }catch(Exception e){
            System.out.println("Notifikasi 2 : "+e);
        }
    }
    
    private void tampilRadiologi2() {         
        try{
            jml=0;
            for(i=0;i<tbPermintaanRadiologi.getRowCount();i++){
                if(tbPermintaanRadiologi.getValueAt(i,0).toString().equals("true")){
                    jml++;
                }
            }

            pilih=null;
            pilih=new boolean[jml];
            kode=null;
            kode=new String[jml];
            nama=null;
            nama=new String[jml];
            
            index=0; 
            for(i=0;i<tbPermintaanRadiologi.getRowCount();i++){
                if(tbPermintaanRadiologi.getValueAt(i,0).toString().equals("true")){
                    pilih[index]=true;
                    kode[index]=tbPermintaanRadiologi.getValueAt(i,1).toString();
                    nama[index]=tbPermintaanRadiologi.getValueAt(i,2).toString();
                    index++;
                }
            }

            Valid.tabelKosong(tabModeRadiologi);
            for(i=0;i<jml;i++){                
                tabModeRadiologi.addRow(new Object[] {pilih[i],kode[i],nama[i]});
            }    
        
            myObj = new FileReader("./cache/permintaanradiologi.iyem");
            root = mapper.readTree(myObj);
            response = root.path("permintaanradiologi");
            if(response.isArray()){
                for(JsonNode list:response){
                    if((list.path("KodePeriksa").asText().toLowerCase().contains(CariRadiologi.getText().toLowerCase())||list.path("NamaPemeriksaan").asText().toLowerCase().contains(CariRadiologi.getText().toLowerCase()))){
                        tabModeRadiologi.addRow(new Object[]{
                            false,list.path("KodePeriksa").asText(),list.path("NamaPemeriksaan").asText()
                        });
                    }
                }
            }  
            myObj.close(); 
        }catch(Exception e){
            System.out.println("Notifikasi : "+e);
        }
    }
    
    private void tampilPK() {         
        try{
            file=new File("./cache/permintaanpk.iyem");
            file.createNewFile();
            fileWriter = new FileWriter(file);
            iyem=""; 
        
            ps=koneksi.prepareStatement(
                    "select jns_perawatan_lab.kd_jenis_prw,jns_perawatan_lab.nm_perawatan,jns_perawatan_lab.kd_pj,jns_perawatan_lab.kelas from jns_perawatan_lab where jns_perawatan_lab.status='1' and jns_perawatan_lab.kategori='PK' order by jns_perawatan_lab.kd_jenis_prw");
            try {
                rs=ps.executeQuery();
                while(rs.next()){
                    iyem=iyem+"{\"KodePeriksa\":\""+rs.getString(1)+"\",\"NamaPemeriksaan\":\""+rs.getString(2).replaceAll("\"","")+"\",\"KodePJ\":\""+rs.getString(3)+"\",\"Kelas\":\""+rs.getString(4)+"\"},";
                }
            } catch (Exception e) {
                System.out.println("Notifikasi 1 : "+e);
            } finally{
                if(rs!=null){
                    rs.close();
                }
                if(ps!=null){
                    ps.close();
                }
            }
            fileWriter.write("{\"permintaanpk\":["+iyem.substring(0,iyem.length()-1)+"]}");
            fileWriter.flush();
            fileWriter.close();
            iyem=null;
        }catch(Exception e){
            System.out.println("Notifikasi 2 : "+e);
        }
    }
    
    private void tampilPK2() {         
        try{
            jml=0;
            for(i=0;i<tbPermintaanPK.getRowCount();i++){
                if(tbPermintaanPK.getValueAt(i,0).toString().equals("true")){
                    jml++;
                }
            }

            pilih=null;
            pilih=new boolean[jml];
            kode=null;
            kode=new String[jml];
            nama=null;
            nama=new String[jml];
            
            index=0; 
            for(i=0;i<tbPermintaanPK.getRowCount();i++){
                if(tbPermintaanPK.getValueAt(i,0).toString().equals("true")){
                    pilih[index]=true;
                    kode[index]=tbPermintaanPK.getValueAt(i,1).toString();
                    nama[index]=tbPermintaanPK.getValueAt(i,2).toString();
                    index++;
                }
            }

            Valid.tabelKosong(tabModePK);
            for(i=0;i<jml;i++){                
                tabModePK.addRow(new Object[] {pilih[i],kode[i],nama[i]});
            }    
        
            myObj = new FileReader("./cache/permintaanpk.iyem");
            root = mapper.readTree(myObj);
            response = root.path("permintaanpk");
            if(response.isArray()){
                for(JsonNode list:response){
                    if((list.path("KodePeriksa").asText().toLowerCase().contains(CariPK.getText().toLowerCase())||list.path("NamaPemeriksaan").asText().toLowerCase().contains(CariPK.getText().toLowerCase()))){
                        tabModePK.addRow(new Object[]{
                            false,list.path("KodePeriksa").asText(),list.path("NamaPemeriksaan").asText()
                        });
                    }
                }
            }  
            myObj.close(); 
        }catch(Exception e){
            System.out.println("Notifikasi : "+e);
        }
    }
    
    private void tampilDetailPK() { 
        try {
            jml=0;
            for(i=0;i<tbDetailPK.getRowCount();i++){
                if(tbDetailPK.getValueAt(i,0).toString().equals("true")){
                    jml++;
                }
            }
            
            pilih=null;
            pilih=new boolean[jml];
            nama=null;
            nama=new String[jml];
            satuan=null;
            satuan=new String[jml];
            nilairujukan=null;
            nilairujukan=new String[jml];
            kode=null;
            kode=new String[jml];
            
            index=0; 
            for(i=0;i<tbDetailPK.getRowCount();i++){
                if(tbDetailPK.getValueAt(i,0).toString().equals("true")){
                    pilih[index]=true;
                    nama[index]=tbDetailPK.getValueAt(i,1).toString();
                    satuan[index]=tbDetailPK.getValueAt(i,2).toString();
                    nilairujukan[index]=tbDetailPK.getValueAt(i,3).toString();
                    kode[index]=tbDetailPK.getValueAt(i,4).toString();
                    index++;
                }
            }
            
            Valid.tabelKosong(tabModeDetailPK);
            
            for(i=0;i<jml;i++){ 
                tabModeDetailPK.addRow(new Object[] {
                    pilih[i],nama[i],satuan[i],nilairujukan[i],kode[i]
                });
            }  
            
            for(i=0;i<tbPermintaanPK.getRowCount();i++){ 
                if(tbPermintaanPK.getValueAt(i,0).toString().equals("true")){
                    tabModeDetailPK.addRow(new Object[]{false,tbPermintaanPK.getValueAt(i,2).toString(),"","",""});
                    ps=koneksi.prepareStatement("select template_laboratorium.id_template,template_laboratorium.Pemeriksaan,template_laboratorium.satuan,template_laboratorium.nilai_rujukan_ld,template_laboratorium.nilai_rujukan_la,template_laboratorium.nilai_rujukan_pd,template_laboratorium.nilai_rujukan_pa from template_laboratorium where template_laboratorium.kd_jenis_prw=? and template_laboratorium.Pemeriksaan like ? order by template_laboratorium.urut");
                    try {
                        ps.setString(1,tbPermintaanPK.getValueAt(i,1).toString());
                        ps.setString(2,"%"+CariDetailPK.getText().trim()+"%");
                        rs=ps.executeQuery();
                        while(rs.next()){
                            la="";ld="";pa="";pd="";
                            if(!rs.getString("nilai_rujukan_ld").equals("")){
                                ld="LD : "+rs.getString("nilai_rujukan_ld");
                            }
                            if(!rs.getString("nilai_rujukan_la").equals("")){
                                la=", LA : "+rs.getString("nilai_rujukan_la");
                            }
                            if(!rs.getString("nilai_rujukan_pa").equals("")){
                                pd=", PD : "+rs.getString("nilai_rujukan_pd");
                            }
                            if(!rs.getString("nilai_rujukan_pd").equals("")){
                                pa=" PA : "+rs.getString("nilai_rujukan_pa");
                            }
                            tabModeDetailPK.addRow(new Object[]{
                                false,"   "+rs.getString("Pemeriksaan"),rs.getString("satuan"),ld+la+pd+pa,rs.getString("id_template")
                            });
                        }
                    } catch (Exception e) {
                        System.out.println("Notifikasi : "+e);
                    } finally{
                        if(rs!=null){
                            rs.close();
                        }
                        if(ps!=null){
                            ps.close();
                        }
                    }                        
                                              
                }
            }
        } catch (Exception e) {
            System.out.println("Error Detail : "+e);
        }
    }
    
    private void tampilPA() {         
        try{
            file=new File("./cache/permintaanpa.iyem");
            file.createNewFile();
            fileWriter = new FileWriter(file);
            iyem=""; 
        
            ps=koneksi.prepareStatement(
                    "select jns_perawatan_lab.kd_jenis_prw,jns_perawatan_lab.nm_perawatan,jns_perawatan_lab.kd_pj,jns_perawatan_lab.kelas from jns_perawatan_lab where jns_perawatan_lab.status='1' and jns_perawatan_lab.kategori='PA' order by jns_perawatan_lab.kd_jenis_prw");
            try {
                rs=ps.executeQuery();
                while(rs.next()){
                    iyem=iyem+"{\"KodePeriksa\":\""+rs.getString(1)+"\",\"NamaPemeriksaan\":\""+rs.getString(2).replaceAll("\"","")+"\",\"KodePJ\":\""+rs.getString(3)+"\",\"Kelas\":\""+rs.getString(4)+"\"},";
                }
            } catch (Exception e) {
                System.out.println("Notifikasi 1 : "+e);
            } finally{
                if(rs!=null){
                    rs.close();
                }
                if(ps!=null){
                    ps.close();
                }
            }
            fileWriter.write("{\"permintaanpa\":["+iyem.substring(0,iyem.length()-1)+"]}");
            fileWriter.flush();
            fileWriter.close();
            iyem=null;
        }catch(Exception e){
            System.out.println("Notifikasi 2 : "+e);
        }
    }
    
    private void tampilPA2() {         
        try{
            jml=0;
            for(i=0;i<tbPermintaanPA.getRowCount();i++){
                if(tbPermintaanPA.getValueAt(i,0).toString().equals("true")){
                    jml++;
                }
            }

            pilih=null;
            pilih=new boolean[jml];
            kode=null;
            kode=new String[jml];
            nama=null;
            nama=new String[jml];
            
            index=0; 
            for(i=0;i<tbPermintaanPA.getRowCount();i++){
                if(tbPermintaanPA.getValueAt(i,0).toString().equals("true")){
                    pilih[index]=true;
                    kode[index]=tbPermintaanPA.getValueAt(i,1).toString();
                    nama[index]=tbPermintaanPA.getValueAt(i,2).toString();
                    index++;
                }
            }

            Valid.tabelKosong(tabModePA);
            for(i=0;i<jml;i++){                
                tabModePA.addRow(new Object[] {pilih[i],kode[i],nama[i]});
            }    
        
            myObj = new FileReader("./cache/permintaanpa.iyem");
            root = mapper.readTree(myObj);
            response = root.path("permintaanpa");
            if(response.isArray()){
                for(JsonNode list:response){
                    if((list.path("KodePeriksa").asText().toLowerCase().contains(CariPA.getText().toLowerCase())||list.path("NamaPemeriksaan").asText().toLowerCase().contains(CariPA.getText().toLowerCase()))){
                        tabModePA.addRow(new Object[]{
                            false,list.path("KodePeriksa").asText(),list.path("NamaPemeriksaan").asText()
                        });
                    }
                }
            }  
            myObj.close(); 
        }catch(Exception e){
            System.out.println("Notifikasi : "+e);
        }
    }
    
}
