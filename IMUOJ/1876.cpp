#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	if (n >= 60) cout << "A科室";
	else if (n >= 18)cout << "B科室";
	else if (n >= 7) cout << "C科室";
	else cout << "D科室";
}