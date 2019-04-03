#include<iostream>
#include<iomanip>
using namespace std;
int main() {
	int n;
	cin >> n;
	double k=n-50*(n/100);
	cout<<fixed<<setprecision(2)<<k/n*10<<endl;
}

