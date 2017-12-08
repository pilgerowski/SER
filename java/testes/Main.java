package testes;

import classes.*;
import java.util.ArrayList;
import java.util.Date;
import java.net.MalformedURLException;
import java.net.URL;

public class Main {

	public static void main(String[] args) {
		ArrayList<Status> listaStatus = new ArrayList<Status>();
		listaStatus.add(new Status("Isento"));
		listaStatus.add(new Status("Em dia"));
		listaStatus.add(new Status("Em débito"));
		
		System.out.println("Lista de status:");
		for (Status status : listaStatus) {
			System.out.println(status.getNome());
		}
		System.out.println();
		
		//========================
		
		ArrayList<Categoria> listaCategorias = new ArrayList<Categoria>();
		listaCategorias.add(new Categoria("Alimento"));
		listaCategorias.add(new Categoria("Bebida"));
		listaCategorias.add(new Categoria("Vestimenta"));
		
		System.out.println("Lista de categorias:");
		for (Categoria categoria : listaCategorias) {
			System.out.println(categoria.getNome());
		}
		System.out.println();
		
		//========================
		
		ArrayList<Local> listaLocais = new ArrayList<Local>();
		listaLocais.add(new Local("Praça Itália"));
		listaLocais.add(new Local("Praça Anita Garibaldi"));
		listaLocais.add(new Local("Viaduto Otávio Rocha"));
		
		System.out.println("Lista de locais:");
		for (Local local : listaLocais) {
			System.out.println(local.getNome());
		}
		System.out.println();
		
		//========================
		
		ArrayList<UF> listaUFs = new ArrayList<UF>();
		listaUFs.add(new UF("Rio Grande do Sul", "RS"));
		
		System.out.println("Lista de UFs:");
		for (UF uf : listaUFs) {
			System.out.println(uf.toString());
		}
		System.out.println();
		
		//========================
		
		ArrayList<Municipio> listaMunicipios = new ArrayList<Municipio>();
		listaMunicipios.add(new Municipio("Porto Alegre", listaUFs.get(0)));  //RS
		
		System.out.println("Lista de Municípios:");
		for (Municipio municipio : listaMunicipios) {
			System.out.println(municipio.toString());
		}
		System.out.println();
		
		//========================
		
		ArrayList<Endereco> listaEnderecos = new ArrayList<Endereco>();
		listaEnderecos.add(new Endereco("Av. Borges de Medeiros", "855", listaMunicipios.get(0))); //Porto Alegre
		listaEnderecos.add(new Endereco("Av. Praia de Belas", "100", listaMunicipios.get(0))); //Porto Alegre
		
		System.out.println("Lista de endereços:");
		for (Endereco endereco : listaEnderecos) {
			System.out.println(endereco.toString());
		}
		System.out.println();
		
		//========================
		
		Expositor expositor1 = new Expositor();
		expositor1.setNome("João das Couves");
		expositor1.setMarca("The Best Couve");
		
		expositor1.adicionaEndereco(listaEnderecos.get(0));
		expositor1.adicionaEmail("maluf@mas.faz", true);
		expositor1.adicionaTelefone("5555-5555", true);
		expositor1.adicionaTelefone("4444-4444", false);
		
		try { //Bloco try-catch necessário para evitar erros no Java
			expositor1.setUrlSite(new URL("http://www.joaodascouves.com.br/"));
		} catch (MalformedURLException e) {
			e.printStackTrace();
		}
		
		Expositor expositor2 = new Expositor();
		expositor2.setNome("Maria Fulô");
		expositor2.setMarca("Maria Fulô");
		
		expositor2.adicionaEndereco(listaEnderecos.get(1));
		expositor2.adicionaEmail("mariafulo@gmail.com", true);
		expositor2.adicionaTelefone("8888-8888", true);
		
		try { //Bloco try-catch necessário para evitar erros no Java
			expositor2.setUrlFacebook(new URL("http://www.facebook.com/MariaFulo"));
		} catch (MalformedURLException e) {
			e.printStackTrace();
		}
		
		System.out.println("----------------\n");
		exibirExpositor(expositor1);
		
		System.out.println("----------------\n");
		exibirExpositor(expositor2);
		
		System.out.println("----------------\n");
		
		ExpositorCategoria expCat1 = new ExpositorCategoria(expositor1, listaCategorias.get(0)); //Alimento
		System.out.print("O expositor " + expCat1.getExpositor().getNome() + " está ");
		if (!expCat1.getAtivo()) {
			System.out.print("in");
		}
		System.out.println("ativo na categoria " + expCat1.getCategoria().getNome());
		
		ExpositorCategoria expCat2 = new ExpositorCategoria(expositor2, listaCategorias.get(2)); //Vestimenta
		System.out.print("O expositor " + expCat2.getExpositor().getNome() + " está ");
		if (!expCat2.getAtivo()) {
			System.out.print("in");
		}
		System.out.println("ativo na categoria " + expCat2.getCategoria().getNome());
		
		//========================

		System.out.println();
		System.out.println("----------------\n");
		
		Evento evento = new Evento("Me Gusta #1", new Date(2017, 12, 01), listaLocais.get(0));
		
		ArrayList<ExpositorEvento> listaExpEv = new ArrayList<ExpositorEvento>();
		listaExpEv.add(new ExpositorEvento(expCat1, evento, listaStatus.get(1), true, 1000.0f));
		listaExpEv.add(new ExpositorEvento(expCat2, evento, listaStatus.get(2), false, 1000.0f));
		
		exibirEvento(evento, listaExpEv);
	}
	
	private static void exibirExpositor(Expositor expositor) {
		System.out.println("Dados do expositor " + expositor.getNome() + ":");
		if (expositor.getUrlSite() != null) {
			System.out.println("Site: " + expositor.getUrlSite());
		}
		if (expositor.getUrlFacebook() != null) {
			System.out.println("Facebook: " + expositor.getUrlFacebook());
		}
		if (expositor.getUrlInstagram() != null) {
			System.out.println("Instagram: " + expositor.getUrlInstagram());
		}
		System.out.println();
		System.out.println("E-mails:");
		for (Email email : expositor.getEmails()) {
			System.out.print(" " + email.getEmail());
			if (email.getEhPrincipal()) {
				System.out.print(" (principal)");
			}
			System.out.println();
		}
		System.out.println();
		System.out.println("Telefones:");
		for (Telefone telefone : expositor.getTelefones()) {
			System.out.print(" " + telefone.getNumero());
			if (telefone.getEhPrincipal()) {
				System.out.print(" (principal)");
			}
			System.out.println();
		}
		System.out.println();
		System.out.println("Endereços:");
		for (Endereco endereco : expositor.getEnderecos()) {
			System.out.print(" " + endereco);
			if (endereco.getEhPrincipal()) {
				System.out.print(" (principal)");
			}
			System.out.println();
		}
		System.out.println();
	}
	
	private static void exibirEvento(Evento evento, ArrayList<ExpositorEvento> listaExpEv) {
		System.out.println("Evento: " + evento.getNome());
		System.out.println("Data: " + evento.getData());
		System.out.println("Local: " + evento.getLocal().getNome());
		System.out.println("Expositores: ");
		for (ExpositorEvento expEv : listaExpEv) {
			if (expEv.getEvento() == evento) {
				System.out.println(" " + expEv.getExpositor().getNome());
				System.out.println(" Categoria: " + expEv.getExpositorCategoria().getCategoria().getNome());
				System.out.println(" " + (expEv.getPresente() ? "Presente" : "Ausente"));
				System.out.println(" Status: " + expEv.getStatus().getNome());
				System.out.println(" " + expEv.getQuantidadeVendida() + " em vendas");
				System.out.println();
			}
		}
	}
}
