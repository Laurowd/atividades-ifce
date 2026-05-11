import { StyleSheet } from "react-native";

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#f5f5f5',
  },
  header: {
    backgroundColor: '#5856D6',
    paddingTop: 50,
    paddingBottom: 15,
    paddingHorizontal: 20,
    alignItems: 'center',
  },
  headerTitle: {
    color: '#fff',
    fontSize: 18,
    fontWeight: '500',
  },
  content: {
    flex: 1,
  },
  contentContainer: {
    flexGrow: 1,
    justifyContent: 'space-between',
    paddingVertical: 30,
  },
  emptyState: {
    backgroundColor: '#D3D3D3',
    marginHorizontal: 30,
    marginTop: 20,
    padding: 40,
    borderRadius: 8,
    alignItems: 'center',
  },
  emptyStateText: {
    color: '#333',
    fontSize: 16,
    textAlign: 'center',
    lineHeight: 24,
  },
  addButton: {
    backgroundColor: '#007AFF',
    marginHorizontal: 50,
    marginBottom: 30,
    paddingVertical: 15,
    borderRadius: 25,
    alignItems: 'center',
  },
  addButtonText: {
    color: '#fff',
    fontSize: 16,
    fontWeight: '600',
  },
  formContainer: {
    backgroundColor: '#D3D3D3',
    marginHorizontal: 20,
    marginTop: 20,
    padding: 25,
    borderRadius: 15,
  },
  formTitle: {
    fontSize: 18,
    fontWeight: '600',
    color: '#333',
    marginBottom: 20,
    textAlign: 'center',
  },
  inputGroup: {
    marginBottom: 15,
  },
  inputLabel: {
    fontSize: 14,
    color: '#007AFF',
    marginBottom: 5,
    fontWeight: '500',
  },
  input: {
    backgroundColor: '#6B6B6B',
    borderRadius: 8,
    paddingVertical: 12,
    paddingHorizontal: 15,
    fontSize: 16,
    color: '#fff',
  },
  concludeButton: {
    backgroundColor: '#00C853',
    borderRadius: 25,
    paddingVertical: 15,
    marginTop: 20,
    alignItems: 'center',
  },
  concludeButtonText: {
    color: '#fff',
    fontSize: 16,
    fontWeight: '600',
  },
  clientsListContainer: {
    marginHorizontal: 20,
    marginTop: 20,
  },
  clientCard: {
    backgroundColor: '#fff',
    borderRadius: 15,
    padding: 20,
    marginBottom: 15,
    flexDirection: 'row',
    justifyContent: 'space-between',
    shadowColor: '#000',
    shadowOffset: {
      width: 0,
      height: 2,
    },
    shadowOpacity: 0.1,
    shadowRadius: 3,
    elevation: 3,
  },
  clientInfo: {
    flex: 1,
  },
  clientLabel: {
    fontSize: 14,
    color: '#666',
    marginBottom: 5,
  },
  clientValue: {
    fontSize: 16,
    color: '#333',
    fontWeight: '600',
  },
  treinoClientCard: {
    backgroundColor: '#fff',
    borderRadius: 15,
    padding: 20,
    marginBottom: 15,
    shadowColor: '#000',
    shadowOffset: {
      width: 0,
      height: 2,
    },
    shadowOpacity: 0.1,
    shadowRadius: 3,
    elevation: 3,
  },
  treinoClientInfo: {
    width: '100%',
  },
  clientInfoRow: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    marginBottom: 15,
  },
  treinoClientLabel: {
    fontSize: 14,
    color: '#666',
    marginBottom: 5,
  },
  treinoClientValue: {
    fontSize: 16,
    color: '#333',
    fontWeight: '600',
  },
  montarTreinoButton: {
    backgroundColor: '#007AFF',
    borderRadius: 25,
    paddingVertical: 12,
    alignItems: 'center',
  },
  montarTreinoButtonText: {
    color: '#fff',
    fontSize: 16,
    fontWeight: '600',
  },
  treinoInputRow: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    gap: 10,
  },
  treinoInputSmall: {
    flex: 1,
  },
  treinosListContainer: {
    marginHorizontal: 20,
    marginTop: 20,
  },
  treinoCard: {
    backgroundColor: '#fff',
    borderRadius: 10,
    padding: 20,
    marginBottom: 15,
    shadowColor: '#000',
    shadowOffset: {
      width: 0,
      height: 2,
    },
    shadowOpacity: 0.1,
    shadowRadius: 3,
    elevation: 3,
  },
  treinoCardTitle: {
    fontSize: 18,
    fontWeight: 'bold',
    color: '#333',
    marginBottom: 15,
    borderBottomWidth: 1,
    borderBottomColor: '#e0e0e0',
    paddingBottom: 10,
  },
  exercicioItem: {
    paddingVertical: 8,
  },
  exercicioText: {
    fontSize: 15,
    color: '#555',
    lineHeight: 22,
  },
  bottomNav: {
    flexDirection: 'row',
    backgroundColor: '#5856D6',
    paddingVertical: 15,
    borderTopWidth: 1,
    borderTopColor: '#4645B5',
  },
  navButton: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center',
  },
  navButtonActive: {
    backgroundColor: 'transparent',
  },
  navButtonText: {
    color: '#fff',
    fontSize: 16,
    fontWeight: '500',
  },
  navButtonTextActive: {
    color: '#fff',
    fontWeight: '600',
  },
});

export default styles;
