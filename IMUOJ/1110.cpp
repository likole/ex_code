#include<iostream>
using namespace std;
void print(int n) {
	for (int i = 0; i < n; ++i) {
		cout << " ";
	}
}
int main() {
	int num;
	cin >> num;
	for (int z = 0; z < num; ++z) {
		int n, k;
		cin >> n >> k;
		cout << "X";
		print(n - 2);
		cout << "X \n";
		for (int i = 0; i < k; ++i) {
			for (int j = 1; j < n/2; ++j) {
				print(j);
				cout<<"X";
				print(j*2-1);
				cout << "X \n";
			}
			print(n/2);
			cout<<"X \n";
			for (int j = n/2-1; j >=0; --j) {
				print(j);
				cout<<"X";
				print(n-2*j-2);
				cout << "X \n";
			}

		}
		cout << endl;
	}
}
