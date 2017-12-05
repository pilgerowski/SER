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
		
		System.out.println("Lista de endereços:");
		for (Endereco endereco : listaEnderecos) {
			System.out.println(endereco.toString());
		}
		System.out.println();
		
		//========================
		
		Expositor expositor = new Expositor();
		expositor.setNome("João das Couves");
		expositor.setMarca("The Best Couve");
		
		expositor.adicionaEndereco(listaEnderecos.get(0));
		expositor.adicionaEmail("maluf@mas.faz", true);
		expositor.adicionaTelefone("5555-5555", true);
		expositor.adicionaTelefone("4444-4444", false);
		
		try { //Bloco try-catch necessário para evitar erros no Java
			expositor.setUrlSite(new URL("http://www.joaodascouves.com.br/"));
		} catch (MalformedURLException e) {
			e.printStackTrace();
		}
		
		System.out.println("----------------\n");
		
		System.out.println("Dados do expositor " + expositor.getNome() + ":");
		System.out.println("Site: " + expositor.getUrlSite());
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
		
		ExpositorCategoria expCat = new ExpositorCategoria(expositor, listaCategorias.get(0)); //Alimento
		System.out.print("O expositor " + expCat.getExpositor().getNome() + " está ");
		if (!expCat.getAtivo()) {
			System.out.print("in");
		}
		System.out.println("ativo na categoria " + expCat.getCategoria().getNome());
		
		//========================
		
		Evento evento = new Evento("Me Gusta #1", new Date(2017, 12, 01), listaLocais.get(0));
		System.out.println("Evento: " + evento.getNome());
		System.out.println("Data: " + evento.getData());
		System.out.println("Local: " + evento.getLocal().getNome());
	}
}
