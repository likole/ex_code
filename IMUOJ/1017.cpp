#include<iostream>;
using namespace std;
int main()
{
	int x;
	cin >> x;
	if (x<1) cout << x << endl;
	else if (x>=10) cout << x * 3 - 11<<endl;
	else cout << x * 2 - 1 << endl;
	//cin.get();
	//cin.get();
	return 0;
}